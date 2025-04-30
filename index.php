<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://possoandarealmare.altervista.org/" />
    <link rel="manifest" href="/manifest.json">
    <meta name="description" content="Si può andare al mare oggi? Scoprilo con noi! Scansioniamo i dati meteo di tutte le regioni italiane!">
    <meta name="keywords" content="weather, meteo, mare, sea, beach, spiaggia, pioggia, rain, nuvole, clouds, tempo, clima, estate, summer, previsioni, forecast, previsioni del tempo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#E2DCC0">
    <meta name="msapplication-TileColor" content="#E2DCC0">
    <meta name="theme-color" content="#E2DCC0">
    <link rel="stylesheet" href="style/styleV6.css">
    <script src="style/StyScrV6.js" nonce="<?php echo $nonce ?>"></script>
    <script src="script/predictV9.js" nonce="<?php echo $nonce ?>"></script>
    <link rel="shortcut icon" href="https://possoandarealmare.altervista.org/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-startup-image" href="splashscreens/iphonexr_splash.png" media="orientation: portrait">
    <link rel="apple-touch-icon" href="img/apple-touch-icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icons/apple-touch-icon-180x180.png" />
    <link href="splashscreens/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="splashscreens/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="splashscreens/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <meta name="mobile-web-app-capable" content="yes">
    <title>Posso andare al mare?</title>
</head>

<body>
    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Info aggiuntive</h2>
            <a class="close">&times;</a>
            <div class="content">
            </div>
        </div>
    </div>

    <header>
        <h1>Posso andare al mare?</h1>
        <button id="menubut">Menu</button>
        <nav>
            <li class="dropdown">
                <button class="dropbtn" id="locale">Località</button>
                <div class="dropdown-content" id="content">
                    <div class="dropdown-content" id="beaches">
                    </div>
                    <a id='Abruzzo' class="nav">Abruzzo</a>
                    <a id='Basilicata' class="nav">Basilicata</a>
                    <a id='Calabria' class="nav">Calabria</a>
                    <a id='Campania' class="nav">Campania</a>
                    <a id='Emilia Romagna' class="nav">Emilia Romagna</a>
                    <a id='Friuli Venezia Giulia' class="nav">Friuli Venezia Giulia</a>
                    <a id='Lazio' class="nav">Lazio</a>
                    <a id='Liguria' class="nav">Liguria</a>
                    <a id='Marche' class="nav">Marche</a>
                    <a id='Molise' class="nav">Molise</a>
                    <a id='Puglia' class="nav">Puglia</a>
                    <a id='Sardegna' class="nav">Sardegna</a>
                    <a id='Sicilia' class="nav">Sicilia</a>
                    <a id='Toscana' class="nav">Toscana</a>
                    <a id='Veneto' class="nav">Veneto</a>
                </div>
            </li>
            <button id="https://possoandarealmare.altervista.org/" class="sitenav">🏖️Home</button>
            <button id="https://possoandarealmare.altervista.org/about.php" class="sitenav">ℹ️About</button>
            <button id="lightctrl" class="sitenav"></button>
        </nav>
    </header>
    <main>

        <div id="season">

            <p>Siamo in:</p>

            <p id="seas"></p>
        </div>
        <article id="1">

        </article>
        <div id="week">
            <article id="2">


            </article>
            <article id="3">

            </article>
            <article id="4">

            </article>
            <article id="5">

            </article>
            <article id="6">

            </article>
            <article id="7">

            </article>
        </div>
    </main>
    <footer>
        <p>Powered by <a href="https://www.open-meteo.com/">Open-Meteo.com</a>
        </p>
    </footer>
    <footer style="border-radius:50px 0 0 0;right:0;">
        <p><img src="img/whatsapp.png" alt="Whatsapp" width="16px" height="16px"><a href="whatsapp://send?text=Ti va di andare al mare? https://possoandarealmare.altervista.org/">Whastapp</a></p>
    </footer>
</body>
<script nonce="<?php echo $nonce ?>">
    function isIE() {
        const ua = window.navigator.userAgent; //Check the userAgent property of the window.navigator object
        const msie = ua.indexOf('MSIE '); // IE 10 or older
        const trident = ua.indexOf('Trident/'); //IE 11
        if (msie > 0 || trident > 0) {
            document.body.style.backgroundImage = "url('./img/error.png')";
            document.body.innerHTML = "<style>body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;margin:0;}img{cursor:pointer;}header{text-align:center;background-image: linear-gradient(to right top, rgb(173, 216, 230), rgb(245, 222, 179));margin:0;padding:25px;border-radius:0 0 20px 20px;}</style><header><h1>Web App incompatibile con il browser corrente.</h1></header><h3 style='text-align:center'>Prendi in considerazione un browser più moderno.</h3><div style='display:flex;width:500px;margin:auto;justify-content: space-around;'><img onclick='location.href=\"https://www.google.com/chrome/\"' src='https://upload.wikimedia.org/wikipedia/commons/e/e1/Google_Chrome_icon_%28February_2022%29.svg' alt='Google Chrome' width=64px><img onclick='location.href=\"https://upload.wikimedia.org/wikipedia/commons/a/a0/Firefox_logo%2C_2019.svg\"' src='https://upload.wikimedia.org/wikipedia/commons/a/a0/Firefox_logo%2C_2019.svg' alt='Mozilla Firefox' width=64px><img onclick='location.href=\"https://www.microsoft.com/en-us/edge/download?form=MA13FJ\"' src='https://upload.wikimedia.org/wikipedia/commons/7/7e/Microsoft_Edge_logo_%282019%29.png' alt='Microsoft Edge' width=64px><img onclick='location.href=\"https://upload.wikimedia.org/wikipedia/commons/5/52/Safari_browser_logo.svg\"' src='https://upload.wikimedia.org/wikipedia/commons/5/52/Safari_browser_logo.svg' alt='Safari' width=64px></div>";
        } else {
            console.log();
        }
    }
    isIE();
    window.addEventListener('load', () => {
        main(0);
        for (let i = 0; i < document.getElementsByClassName("nav").length; i++) {
            document.getElementsByClassName('nav')[i].addEventListener('click', function() {
                showBeaches(this.getAttribute('id'));
            });
        }
        document.getElementsByClassName("close")[0].addEventListener("click", () => {
            closeit();
        });
    });
    var observer = new MutationObserver(function(elem) {
        elem.forEach(function(popup) {
            if ("display: block;" == popup.target.attributes.style.value || "display: block; overflow-y: hidden;" == popup.target.attributes.style.value) {
                disableScroll();
            } else {
                enableScroll();
            }
        });
    });
    const target = document.getElementById("content");
    observer.observe(target, {
        'attributes': true,
        'attributeFilter': ['style']
    });
    var observerInfo = new MutationObserver(function(elem) {
        elem.forEach(function(popup) {
            if ("visibility: unset; opacity: 1;" == popup.target.attributes.style.value) {
                target.style.display = "none";
            }
        });
    });
    const targetInfo = document.getElementById("popup1");
    observerInfo.observe(targetInfo, {
        'attributes': true,
        'attributeFilter': ["style"]
    });
    const locale = document.getElementById('locale');
    locale.addEventListener("click", function() {
        if ('none' != document.getElementById("content").style.display) {
            document.getElementById("content").style.display = "none";
        } else {
            document.getElementById("content").style.display = "block";
        }
    });
</script>

</html>