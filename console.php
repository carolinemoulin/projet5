<?php
ini_set('display_errors',1);

require "../vendor/autoload.php";

use App\Controller\Backend;
use App\Controller\Frontend;
$myFront = new Frontend();
$myBack = new backend();

$accesdenied = 'Vous tentez d\'accéder à un espace réservé aux administrateurs !';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'admin'){
            if (isset($_POST['userPseudo']) && !empty($_POST['userPseudo']) && isset($_POST['userPass']) && !empty($_POST['userPass']))
            {$myBack->verifyMember($_POST['userPass'], $_POST['userPseudo']);
                if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                        require ('App/View/backend/consolePanelView.php');
                    }else{
                        throw new \Exception('Tous les champs ne sont pas remplis');
                    }
                    }else{
                throw new \Exception($accesdenied);
            }
        }
//Gestion des projets
        //vers la page d'ajout de projet
        elseif($_GET['action'] == 'addProject') {
            if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
                require('App/View/backend/newProjectView.php');
            } else {
                throw new \Exception($accesdenied);
            }
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newProject'){
            if (!empty($_POST['titleProject'])&& !empty($_POST['description'])&& !empty($_POST['techno'])&& !empty($_POST['image'])&& !empty($_POST['link'])) {


                $myBack->newProject($_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des projets
        elseif($_GET['action'] == 'manageProjects'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                $myBack->listProjectsBack();
        }else{
                throw new \Exception($accesdenied);
            }
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editProjectView') {
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $myBack->viewEditProject($_GET['id']);
                }else {
                    throw new \Exception('Aucun projet à éditer !');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editProject'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && ($_GET['id'] > 0)){
                    $myBack->editProject($_GET['id'], $_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
                }else{
                    throw new \Exception('Aucun id de projet');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteProject'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $myBack->deleteProject($_GET['id']);
                }else{
                    throw new \Exception('Aucun id de projet');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
//Gestion des expériences
        //vers la page d'ajout d'expérience
        elseif($_GET['action'] == 'addJob'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                require('App/View/backend/newJobView.php');
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Ajout d'une expérience depuis la zone admin
        elseif($_GET['action'] == 'newJob'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (!empty($_POST['entreprise'])&& !empty($_POST['missions'])&& !empty($_POST['dateStart'])) {
                    $myBack->newJob($_POST['entreprise'], $_POST['logo'], $_POST['position'], $_POST['missions'], $_POST['dateStart'], $_POST['dateEnd']);
                }else {
                    throw new \Exception('Tous les champs ne sont pas remplis');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //vers la page de gestion des expériences
        elseif($_GET['action'] == 'manageJobs'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                $myBack->listJobsBack();
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Vers la page d'edition d'expérience
        elseif ($_GET['action'] == 'editJobView') {
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $myBack->viewEditJob($_GET['id']);
                }else {
                    throw new \Exception('Aucune expérience à éditer !');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //validation de l'edition des Expériences
        elseif($_GET['action'] == 'editJob'){var_dump('test');
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && ($_GET['id'] > 0)){
                    $myBack->editJob($_GET['id'], $_POST['entreprise'], $_POST['position'], $_POST['logo'], $_POST['missions'], $_POST['dateStart'], $_POST['dateEnd']);
                }else{
                    throw new \Exception('Aucun id d\'expérience');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Suppression d'une compétences
        elseif($_GET['action'] == 'deleteJob'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $myBack->deleteJob($_GET['id']);
                }else{
                    throw new \Exception('Aucun id d\'expérience');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
//Gestion des formations
        //vers la page d'ajout de formation
        elseif($_GET['action'] == 'addTraining'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                require('App/View/backend/newTrainingView.php');
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newTraining'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (!empty($_POST['graduate'])&& !empty($_POST['date'])&& !empty($_POST['institution'])) {
                    $myBack->newTraining($_POST['graduate'], $_POST['date'], $_POST['institution']);
                }else {
                    throw new \Exception('Tous les champs ne sont pas remplis');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //vers la page de gestion des formations
        elseif($_GET['action'] == 'manageTrainings'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                $myBack->listTrainingsBack();
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editTrainingView') {
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $myBack->viewEditTraining($_GET['id']);
                }else {
                    throw new \Exception('Aucune formation à éditer !');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editTraining'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                $myBack->editTraining($_GET['id'], $_POST['graduate'], $_POST['date'], $_POST['institution']);
            }else{
                throw new \Exception('Aucun id de formation');
            }
        }else{
                throw new \Exception($accesdenied);
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteTraining'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack->deleteTraining($_GET['id']);
            }else{
                throw new \Exception('Aucun id de formation');
            }
        }else{
                throw new \Exception($accesdenied);
            }
        }

//Gestion des compétences
        //vers la page d'ajout de compétence
        elseif($_GET['action'] == 'addSkill'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                require('App/View/backend/newSkillView.php');
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newSkill'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (!empty($_POST['skill'])&& !empty($_POST['logo'])) {
                    $myBack->newSkill($_POST['skill'], $_POST['logo']);
                }else {
                    throw new \Exception('Tous les champs ne sont pas remplis');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //vers la page de gestion des compétences
        elseif($_GET['action'] == 'manageSkills'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                $myBack->listSkillsBack();
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Vers la page d'edition de compétences
        elseif ($_GET['action'] == 'editSkillView') {
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $myBack->viewEditSkill($_GET['id']);
                }else {
                    throw new \Exception('Aucune Compétence à éditer !');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //validation de l'edition des compétences
        elseif($_GET['action'] == 'editSkill'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
                if (isset($_GET['id']) && ($_GET['id'] > 0)){
                    $myBack->editSkill($_GET['id'], $_POST['skill'], $_POST['logo']);
                }else{
                    throw new \Exception('Aucun id de compétence');
                }
            }else{
                throw new \Exception($accesdenied);
            }
        }
        //Suppression d'une compétences
        elseif($_GET['action'] == 'deleteSkill'){
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack->deleteSkill($_GET['id']);
            }else{
                throw new \Exception('Aucun id de projet');
            }
        }else{
                throw new \Exception($accesdenied);
            }
        }
        //logout membre
        elseif ($_GET['action'] == 'logout'){
            $myBack->logout();
        }

    }
    else {
        require('App/View/backend/consolePanelView.php');
    }

}
catch(\Exception $e) {

    require('App/View/backend/errorView.php');
}