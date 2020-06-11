<?php
ini_set('display_errors',1);

require "../vendor/autoload.php";

use App\Controller\Frontend;

$myFront = new Frontend();


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            $myFront->listProjects();
        }
        else {
    require('App/View/frontend/hostView.php');
}
    }else {
        $myFront->listProjects();
    }
}

catch(\Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    require('App/View/frontend/messageView.php');
}