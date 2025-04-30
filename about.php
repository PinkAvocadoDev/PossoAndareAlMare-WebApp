<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#E2DCC0">
    <meta name="theme-color" content="#E2DCC0">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#E2DCC0">
    <meta name="keywords" content="weather, meteo, mare, sea, beach, spiaggia, pioggia, rain, nuvole, clouds, tempo, clima, estate, summer, previsioni, forecast, previsioni del tempo">
    <link rel="canonical" href="https://possoandarealmare.altervista.org/terms-and-conditions.php" />
    <link rel="manifest" href="./manifest.json">
    <script src="style/StyScrV6.js" nonce="<?php echo $nonce ?>"></script>
    <link rel="stylesheet" href="style/styleV6.css" nonce="<?php echo $nonce ?>">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
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
    <header>
        <h1>Posso andare al mare?</h1>
        <button id="menubut">Menu</button>
        <nav>
			<button id="https://possoandarealmare.altervista.org/" class="sitenav">🏖️Home</button>
            <button id="https://possoandarealmare.altervista.org/about.php" class="sitenav">ℹ️About</button>
            <button id="lightctrl" class="sitenav"></button>
        </nav>
    </header>
    <main id="about">
        <h1>Che cos'&egrave; Posso andare al mare?</h1>
        <div id="abt">
            <div>
                <p>Paalm? &egrave; una web app che si pone lo scopo di rispondere in maniera coincisa e minimalista alla
                    semplice domanda "Si pu&ograve; andare al mare oggi?".</p>
                <p>Conosciamo personalmente quanto sia problematico preparare una giornata di mare, soprattutto se si
                    abita
                    in zone lontane dalla costa, perci&ograve; abbiamo deciso di creare Paalm?, un servizio in grado di
                    interpretare dati meteo e di restituire
                    un giudizio <strong>coinciso e accurato</strong> riguardo la <strong>qualit&agrave;</strong> della
                    giornata di mare.</p>
                <p>Basta consultare servizi meteo di dubbia validit&agrave; e basta interpretare noi stessi una miriade
                    di
                    dati confusi, insomma, Posso andare al mare o no?</p>
            </div>
            <img src="img/favicon.png" id='logo' width="256px" height="256px" alt="Logo">
        </div>
        <hr />
        <h1>FAQ</h1>
        <p><strong>Q: Quale servizio meteo utilizzate per la raccolta dati?</strong></p>
        <p>A: Usiamo <a href="https://open-meteo.com">Open-Meteo</a>, &egrave; un servizio di consulto molto versatile e
            facile da implementare.</p>
        <hr class="qa" />
        <p><strong>Q: Quali dati vengono interpellati dal vostro servizio?</strong></p>
        <p>A: I dati interpellati per il giudizio sono:</p>
        <ul>
            <li>Precipitazioni totali;</li>
            <li>Media Radiazioni UV;</li>
            <li>Media Nuvolosit&agrave;;</li>
            <li>Media di Temperatura.</li>
        </ul>
        <p>Raccogliamo i dati negli orari compresi tra le <strong>8:00 e le 19:00</strong>, in quanto sono gli orari
            pi&ugrave; papabili per godersi una giornata in spiaggia, qualunque altro orario viene ignorato! Inoltre
            raccogliamo anche dati relativi a <strong>vento e temperatura instantanei</strong>, visibili cliccando sul
            pulsante freccetta nella schermata principale.</p>
        <hr class="qa" />
        <p><strong>Q: Ho notato il tag "Attenzione" nella schermata "Info aggiuntive", di che si tratta?</strong></p>
        <p>A: Il servizio offre anche un giudizio in merito all'intensit&agrave; delle radiazioni UV, gi&agrave;
            disperse dalle condizioni atmosferiche, per suggerire la potenza SPF della crema solare. Va da s&eacute; che
            il servizio offre un <strong>suggerimento</strong>, di conseguenza portate con voi la crema solare che
            ritenete pi&ugrave; giusta e non scottatevi ;)</p>
        <hr class="qa" />
        <p><strong>Q: Posso usare il vostro servizio come metro di giudizio per andare in barca o in ogni caso andare a
                mare aperto?</strong></p>
        <p>A: <strong>ASSOLUTAMENTE NO.</strong> Il nostro servizio fornisce un giudizio lightweight sulla
            qualit&agrave; della giornata se passata in <strong>spiaggia</strong>, non ci assumiamo alcuna
            responsabilit&agrave; per danni a cose persone o animali nell'utilizzo del nostro servizio.</p>
        <hr class="qa" />
        <p><strong>Q: Raccogliete i dati degli utenti? Avete scopi commerciali?</strong></p>
        <p>A: Il servizio "Posso andare al mare?" non raccoglie alcun dato personale, n&eacute; usa tracker di
            attivit&agrave; online.
            <li><a href="https://www.possoandarealmare.it/terms-and-conditions"><strong>Termini e condizioni di utilizzo</strong></a></li>
        </ul>
        <hr />
        <h1>Contatti</h1>
        <p>Per ulteriori informazioni o feedback sul servizio, potete contattarmi via mail: <a href="mailto:andreadistefano.work@gmail.com">andreadistefano.work@gmail.com</a></p>
        <p>Oppure potete visitare la mia pagina Github: <a href="https://github.com/galvanizedheart"><img src="img/github.svg" alt="Github" width="30px" height="30px" /></a></p>
        <hr />
        <h3>&copy; <?php echo date("Y")?> Andrea Di Stefano, Tutti i diritti riservati.</h3>
    </main>
    <footer>
        <p><a href="https://open-meteo.com">Powered by Open-Meteo.com</a></p>
    </footer>
   
    <footer style="border-radius:50px 0 0 0;right:0;">
        <p><img src="img/whatsapp.png" alt="Whatsapp" width="16px" height="16px"><a href="whatsapp://send?text=Ti va di andare al mare? https://www.possoandarealmare.it/">Whastapp</a>
        </p>
    </footer>
</body>
<script nonce="<?php echo $nonce ?>">
    function isIE() {
        const ua = window.navigator.userAgent; //Check the userAgent property of the window.navigator object
        const msie = ua.indexOf('MSIE '); // IE 10 or older
        const trident = ua.indexOf('Trident/'); //IE 11

        msie > 0 || trident > 0 ? (document.body.style.backgroundImage = "url('./img/error.png')", document.body.innerHTML = "<style>body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;margin:0;}img{cursor:pointer;}header{text-align:center;background-image: linear-gradient(to right top, rgb(173, 216, 230), rgb(245, 222, 179));margin:0;padding:25px;border-radius:0 0 20px 20px;}</style><header><h1>Web App incompatibile con il browser corrente.</h1></header><h3 style='text-align:center'>Prendi in considerazione un browser più moderno.</h3><div style='display:flex;width:500px;margin:auto;justify-content: space-around;'><img onclick='location.href=" + '"https://www.google.com/chrome/"' + "' src='https://upload.wikimedia.org/wikipedia/commons/e/e1/Google_Chrome_icon_%28February_2022%29.svg' alt='Google Chrome' width=64px><img onclick='location.href=" + '"https://upload.wikimedia.org/wikipedia/commons/a/a0/Firefox_logo%2C_2019.svg"' + "' src='https://upload.wikimedia.org/wikipedia/commons/a/a0/Firefox_logo%2C_2019.svg' alt='Mozilla Firefox' width=64px><img onclick='location.href=" + '"https://www.microsoft.com/en-us/edge/download?form=MA13FJ"' + "' src='https://upload.wikimedia.org/wikipedia/commons/7/7e/Microsoft_Edge_logo_%282019%29.png' alt='Microsoft Edge' width=64px><img onclick='location.href=" + '"https://upload.wikimedia.org/wikipedia/commons/5/52/Safari_browser_logo.svg"' + "' src='https://upload.wikimedia.org/wikipedia/commons/5/52/Safari_browser_logo.svg' alt='Safari' width=64px></div>") : console.log();
    }
    isIE();
</script>

</html>