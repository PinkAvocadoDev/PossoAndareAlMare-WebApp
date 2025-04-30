<?php header('Access-Control-Allow-Origin: https://possoandarealmare.altervista.org');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
header('Access-Control-Max-Age: 86400');
header("Content-Type:application/json");
include('../inc/conf.php');

RESTponse();

function RESTponse()
{
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'POST':
            if (isset($_POST["mode"])) {
                include('../inc/conf.php');
                if ($_POST["mode"] == 1 && isset($_POST["id"])) {
                    include("../inc/db.php");
                    $result = mysqli_query($con, "SELECT lat, lon, name FROM LOCATION WHERE REGION='" . $_POST["id"] . "'");
                    $queryArray = array();
                    while ($set = mysqli_fetch_assoc($result)) {
                        array_push($queryArray, $set);
                    }
                    echo json_encode($queryArray);
                } else if ($_POST["mode"] == 2 && isset($_POST["eval"]) && $_POST["eval"] != "" && isset($_POST["loc"]) && $_POST["loc"] != "") {
                    include("../inc/db.php");
                    mysqli_query($con, "INSERT INTO FEEDBACK (IS_LIKE, LOCATION, DOF) VALUES ('" . $_POST["eval"] . "', '" . $_POST["loc"] . "','" . date("Y-m-d") . "')");
                    $con->close();
                    http_response_code(200);
                } else if ($_POST["mode"] == 3 && isset($_POST["data"])) {
                    $latLon = json_decode($_POST["data"], true);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://api.open-meteo.com/v1/forecast?daily=sunset&timezone=Europe%2FBerlin&latitude=" . $latLon["lat"] . "&longitude=" . $latLon["lon"] . "&hourly=temperature_2m,precipitation,cloudcover,diffuse_radiation&current_weather=true");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                    $result = curl_exec($ch);
                    if (curl_errno($ch)) {
                        http_response_code(500);
                        echo curl_error($ch);
                        exit;
                    }
                    curl_close($ch);
                    $dataPacket = array();
                    $dataArray = json_decode($result, true);
                    for ($day = 1; $day < 8; $day++) {
                        $sT = 0;
                        $sP = 0;
                        $sC = 0;
                        $sR = 0;
                        $max = (8 * $day) + 12;
                        for ($i = 8 * $day; $i < $max; $i++) {
                            $sT = $sT + $dataArray['hourly']['temperature_2m'][$i];
                        }
                        for ($i = 8 * $day; $i < $max; $i++) {
                            $sP = $sP + $dataArray['hourly']['precipitation'][$i];
                        }
                        for ($i = 8 * $day; $i < $max; $i++) {
                            $sC = $sC + $dataArray['hourly']['cloudcover'][$i];
                        }
                        for ($i = 8 * $day; $i < $max; $i++) {
                            $sR = $sR + $dataArray['hourly']['diffuse_radiation'][$i];
                        }
                        $todayPoints = 5;
                        $avgT = round($sT / 12);
                        $avgR = round($sR / 12);
                        $avgC = round($sC / 12);
                        $verdict;
                        if (18 < $avgT && $avgT < 24) {
                            $todayPoints--;
                        } else if ($avgT < 18) {
                            $todayPoints = $todayPoints - 3;
                        }
                        if (0.4 > $sP && $sP > 0.1) {
                            $todayPoints--;
                        } else if ($sP > 0.3) {
                            $todayPoints = $todayPoints - 3;
                        }
                        if (80 >= $avgC && $avgC >= 70) {
                            $todayPoints--;
                        } else if ($avgC > 80) {
                            $todayPoints = $todayPoints - 3;
                        }
                        $uvindex = round($avgR / 25);
                        $uvPoints = 5;
                        $verdictUv;
                        if ($uvindex > 10) {
                            $uvPoints = $uvPoints - 100;
                            $verdictUv = "Rimani <strong>all'ombra</strong>.";
                        } else if ($uvindex < 11 && $uvindex > 7) {
                            $uvPoints = $uvPoints - 4;
                            $verdictUv = "Portati una crema molto forte.";
                        } else if ($uvindex < 8 && $uvindex > 3) {
                            $uvPoints = $uvPoints - 3;
                            $verdictUv = "Ricordati la crema! :)";
                        } else {
                            $uvPoints = $uvPoints - 2;
                            $verdictUv = "Il sole non è molto forte ma ricordati la crema! :)";
                        }
                        $arr = array('avgT' => $avgT, 'avgC' => $avgC, 'avgR' => $avgR, 'sP' => $sP, 'uv' => $verdictUv);
                        $weatherClr;
                        switch ($todayPoints) {
                            case 5:
                            case 4:
                                $verdict = "<strong>Sì!</strong> Fa pure <strong>bel tempo :)</strong>";
                                $weatherClr = "linear-gradient(to bottom left, rgba(245,222,179,1), rgba(255,255,255,1))";
                                break;
                            case 3:
                                $verdict = "<strong>Sì</strong>, ma il tempo non è proprio il massimo.";
                                $weatherClr = "linear-gradient(to bottom left, rgba(255, 255, 229,1), rgba(255,255,255,1))";
                                break;
                            case 2:
                            case 1:
                                $verdict = "<strong>No</strong>, oggi non è giornata da mare.";
                                $weatherClr = "linear-gradient(to bottom left, rgba(211, 211, 211,1), rgba(255,255,255,1))";
                                break;
                            default:
                                $verdict = "<strong>No</strong>, oggi le condizioni sono <strong>troppo brutte :(</strong>";
                                $weatherClr = "linear-gradient(to bottom left, rgba(128, 128, 128,1), rgba(255,255,255,1))";
                                break;
                        }
                        array_push($dataPacket, (array('verdict' => $verdict, 'infoArray' => $arr, 'weatherClr' => $weatherClr)));
                    }
                    array_push($dataPacket, array("time" => $dataArray["daily"]["time"], "temperature" => $dataArray["current_weather"]["temperature"], "windspeed" => $dataArray["current_weather"]["windspeed"]));
                    echo json_encode($dataPacket, true);
                    http_response_code(200);
                } else {
                    http_response_code(404);
                }
            } else {
                http_response_code(404);
            }
            break;
        default:
            http_response_code(405);
            break;
    }
}
