# PossoAndareAlMare
Repo ufficiale di Paalm, web app per il controllo delle condizioni balneari a scopo ricreativo, compatibile con i lidi Italiani.

Vedetela in funzione al link https://possoandarealmare.altervista.org/

# Girarla in locale
Vuoi far partire la tua istanza di Paalm? Nessun problema, ecco cosa ti servirà:
 - PHP 8;
 - Un Server SQL generico (io uso MySQL).
Prima di tutto è necessario configrare il database SQL, successivamente puoi far partire il server di sviluppo PHP locale lanciando il comando `php -S localhost:8000` nella root del progetto, per ulteriori info sul server PHP andate qui https://www.php.net/manual/en/features.commandline.webserver.php
Molto importante, dovrai riconfigurare il file `php/inc/db.php` ed assicurarti che la funzione mysqli_connect sia impostata correttamente.
