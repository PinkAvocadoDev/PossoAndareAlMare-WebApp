"use strict";
var locations = [{ lat: 41.7326012, lon: 12.2784556, name: "Lido di Ostia" }];
var arr = [];
function doAPIcall(method, uri, extendedUri, callback) {
    var xhr = new XMLHttpRequest;
    xhr.onreadystatechange = function () {
        var res = xhr.responseText;
        if (xhr.readyState == XMLHttpRequest.DONE && 200 == xhr.status) {
            if (callback) {
                callback(res);
            }
        } else if (xhr.readyState == XMLHttpRequest.DONE && 200 != xhr.status) {
            document.body.style.backgroundImage = "url('./img/error.png')";
            document.body.innerHTML = "<header><h1>🛑Errore di comunicazione con uno o più servizi🛑</h1></header><div style='text-align:center;'><main style='margin:20vh auto; padding:20px; width:20%'><h3>Riprova più tardi, ci scusiamo per il disagio.</h3><h1>¯&#92;_(ツ)_/¯</h1></main></div>";
        }
    };
    xhr.open(method, uri, true);
    if ("POST" == method) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    try {
        xhr.send(extendedUri);
    } catch (e) {
        document.body.style.backgroundImage = "url('./img/error.png')";
        document.body.innerHTML = "<header><h1>🛑Errore di comunicazione con uno o più servizi🛑</h1></header><div style='text-align:center;'><main style='margin:20vh auto; padding:20px; width:20%'><h3>Riprova più tardi, ci scusiamo per il disagio.</h3><h1>¯&#92;_(ツ)_/¯</h1></main></div>";
    }
}
function main(index) {
    var jsonRes;
    var verdict;
    var infoArray;
    var weatherColor;
    document.getElementById("beaches").style.display = "none";
    document.getElementById("beaches").innerHTML = "";
    document.getElementById("content").removeAttribute("style");
    document.getElementById("content").style.display = "none";
    clearAll();
    doAPIcall("POST", "https://possoandarealmare.altervista.org/php/Controller/server.php", "mode=3&data=" + JSON.stringify({ lat: locations[index].lat, lon: locations[index].lon }), function (res) {
        jsonRes = JSON.parse(res);
        let jsonResInner = JSON.parse(res);
        for (let i = 0; i < 7; i++) {
            let j = i + 1;
            verdict = jsonResInner[i].verdict;
            infoArray = jsonResInner[i].infoArray;
            weatherColor = jsonResInner[i].weatherClr;
            arr.push(infoArray);
            let card = document.getElementById(j);
            let verdictComponent = document.createElement("p");
            verdictComponent.innerHTML = verdict;
            let date = new Date(Date.parse(jsonRes[7].time[i]));
            let dateText = date.toLocaleDateString("it-IT", { weekday: "long", day: "numeric" });
            let dateComponent = document.createElement("sup");
            dateComponent.setAttribute("id", "weekday");
            dateComponent.innerHTML = dateText;
            card.style.backgroundImage = weatherColor;
            card.appendChild(verdictComponent);
            let rightSideCard = document.createElement("div");
            card.appendChild(rightSideCard);
            rightSideCard.setAttribute("class", "button");
            rightSideCard.appendChild(dateComponent);
            let revealButton = document.createElement("button");
            revealButton.innerHTML = "&#x1F449;";
            revealButton.setAttribute("id", "button");
            revealButton.addEventListener("click", function () {
                addinfo(i);
            });
            let buttonContainer = document.getElementsByClassName("button")[i];
            buttonContainer.appendChild(revealButton);
        }
        season();
        document.getElementById("locale").innerHTML = locations[index].name;
        var temperature = jsonRes[7].temperature;
        var windspeed = jsonRes[7].windspeed;
        arr.push({ curr: temperature, currWind: windspeed });
    });
}
function callPHP(vote) {
    if (null != getCookie("voted")) {
        alert("Hai già votato per oggi! Torna domani e grazie per il supporto ❤");
    } else {
        doAPIcall("POST", "https://possoandarealmare.altervista.org/php/Controller/server.php", "eval=" + vote + "&loc=" + document.getElementById("locale").innerHTML + "&mode=2", function (s) {
            let date = new Date;
            let parsedDate = new Date(date);
            parsedDate.setDate(parsedDate.getDate() + 1);
            document.cookie = "voted=yes; where=" + document.getElementById("locale").innerHTML + " expires=" + parsedDate + "; path=/";
            alert("Grazie per il feedback! 👈(ﾟヮﾟ👈)");
        });
    }
}
function getCookie(hasVoted) {
    var cookie = document.cookie;
    var parsedVoted = hasVoted + "=";
    var indexVoted = cookie.indexOf("; " + parsedVoted);
    if (-1 == indexVoted) {
        if (0 != (indexVoted = cookie.indexOf(parsedVoted))) {
            return null;
        }
    } else {
        indexVoted += 2;
        var votes = document.cookie.indexOf(";", indexVoted);
        if (-1 == votes) {
            votes = cookie.length;
        }
    }
    return decodeURI(cookie.substring(indexVoted + parsedVoted.length, votes));
}
function showBeaches(id) {
    let beachesComponent = document.getElementById("beaches");
    let isVisible = beachesComponent.style.display;
    if ("none" != isVisible && id != beachesComponent.childNodes[0].getAttribute("id")) {
        locations = [];
        doAPIcall("POST", "https://possoandarealmare.altervista.org/php/Controller/server.php", "mode=1&id=" + id, function (s) {
            beachesComponent.innerHTML = "";
            locations = JSON.parse(s);
            Beach_helper(beachesComponent, id);
        });
    } else if ("none" != isVisible) {
        locations = [];
        beachesComponent.innerHTML = "";
        document.getElementById("content").removeAttribute("style");
        document.getElementById("content").style.display = "block";
        beachesComponent.style.display = "none";
    } else {
        locations = [];
        doAPIcall("POST", "https://possoandarealmare.altervista.org/php/Controller/server.php", "mode=1&id=" + id, function (s) {
            beachesComponent.innerHTML = "";
            locations = JSON.parse(s);
            Beach_helper(beachesComponent, id);
            beachesComponent.style.display = "block";
        });
    }
}
function Beach_helper(component, id) {
    document.getElementById("content").style.overflowY = "hidden";
    for (let i = 0; i < locations.length; i++) {
        let button = document.createElement("a");
        button.addEventListener("click", function () {
            main(i);
        });
        button.setAttribute("class", "nav");
        button.setAttribute("id", id);
        button.innerHTML = locations[i].name;
        component.appendChild(button);
    }
}
function findSeason() {
    let date = new Date;
    let season = (date.getMonth() + 1).toString().padStart(2, "0") + date.getDate().toString().padStart(2, "0");
    return season < "0320" ? "Inverno" : season < "0621" ? "Primavera" : season < "0921" ? "Estate" : season < "1222" ? "Autunno" : "Inverno";
}
function season() {
    var color;
    var season = findSeason();
    switch (season) {
        case "Primavera":
            color = "rgba(247, 216, 230, 0.5)";
            break;
        case "Estate":
            color = "rgba(255, 215, 0, 0.5)";
            break;
        case "Autunno":
            color = "rgba(244, 123, 32, 0.5)";
            break;
        case "Inverno":
            color = "rgba(194, 246, 255, 0.5)";
    }
    document.getElementById("seas").innerHTML = season;
    document.getElementsByTagName("main")[0].style.backgroundImage = "linear-gradient(to bottom left, " + color + ", transparent)";
}
function addinfo(day) {
    disableScroll();
    let card = document.getElementsByClassName("content")[0];
    var avgTemp = document.createElement("p");
    var avgCloud = document.createElement("p");
    var avgRays = document.createElement("p");
    var rain = document.createElement("p");
    var uvWarn = document.createElement("p");
    uvWarn.innerHTML = "<strong>Attenzione:</strong> " + arr[day].uv;
    avgRays.innerHTML = "Media di raggi UV: " + arr[day].avgR + "W/m&#178;";
    avgTemp.innerHTML = "Media di temperatura: " + arr[day].avgT + "&#8451;";
    avgCloud.innerHTML = "Media di nuvolosità: " + arr[day].avgC + "%";
    rain.innerHTML = "Precipitazioni: " + Math.round(10 * arr[day].sP) / 10 + "mm";
    card.appendChild(uvWarn);
    card.appendChild(avgRays);
    card.appendChild(rain);
    card.appendChild(avgTemp);
    card.appendChild(avgCloud);
    if (0 == day) {
        var windSpeed = document.createElement("p");
        var tempNow = document.createElement("p");
        var likeButton = document.createElement("button");
        var dislikeButton = document.createElement("button");
        var label = document.createElement("p");
        label.innerHTML = "Avevamo ragione?";
        likeButton.setAttribute("id", "like");
        dislikeButton.setAttribute("id", "dislike");
        likeButton.addEventListener("click", function () {
            callPHP(1);
        });
        dislikeButton.addEventListener("click", function () {
            callPHP(0);
        });
        likeButton.innerHTML = "&#x1F44D;";
        dislikeButton.innerHTML = "&#x1F44E;";
        windSpeed.innerHTML = "Velocità vento adesso: " + arr[7].currWind + "Km/h";
        tempNow.innerHTML = "Temperatura adesso: " + arr[7].curr + "&#8451;";
        card.appendChild(tempNow);
        card.appendChild(windSpeed);
        card.appendChild(label);
        card.appendChild(likeButton);
        card.appendChild(dislikeButton);
    }
    document.getElementsByClassName("overlay")[0].style.visibility = "unset";
    document.getElementsByClassName("overlay")[0].style.opacity = "1";
}
