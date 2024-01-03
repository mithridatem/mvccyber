<?php
    //imports des controllers
    include_once './app/controller/ctrl_page.php';
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    switch ($path) {
        case '/mvccyber/':
            home();
            break;
        case '/mvccyber/exemple':
            exemple();
            break;
        default:
            error();
            break;
    }