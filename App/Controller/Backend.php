<?php

namespace App\Controller;
require "../vendor/autoload.php";

if(session_id() == '') {
    session_start();
}
use App\Model\ProjectManager;
use App\Model\JobManager;
use App\Model\SkillManager;
use App\Model\TrainingManager;
use App\Model\AuthManager;



class Backend
{
//VERIFICATION DE L'EXISTENCE D'UN MEMBRE EN BDD
    public function verifyMember($userPass, $userPseudo)
    {
        $authManager = new AuthManager();
        $user = $authManager->getMember($userPseudo);
        //comparaison du mdp saisie avec le mdp hash de la bdd
        $isPasswordCorrect = password_verify($userPass, $user['pass']);
        //Si $member=false le membre n'est pas existant en bdd
        try{
            if (!$user)
            {
                throw new \Exception('Mauvais utilisateur ou mot de passe!');
            }
            else
                //Le membre existe 2 possibilité le mdp correspond
            {
                if ($isPasswordCorrect) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['pseudo'] = $user['pseudo'];
                    $_SESSION['pass'] = $user['pass'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['level'] = $user['level'];
                    //on redirige vers la page d'accueil qui prendra en compte les variable de session
                    header('location:console.php');
                }
                //Le mdp ne correspond pas
                else {
                    throw new \Exception('Mauvais utilisateur ou mot de passe!');
                }
            }
        }
        catch(\Exception $e){
            $authInfo = $e->getMessage();
            ob_start();
            ?>
            <div id="wrongPass">
                <p><?php  echo 'Erreur : ' . $e->getMessage(); ?></p>
                <?php include('Include/login.php');?>
            </div>
            <?php
            $content = ob_get_clean();
            require('App/View/backend/template.php');
        }
    }

    //Projets
    public function newProject($titleProject, $description, $techno, $image, $link)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->addProject($titleProject, $description, $techno, $image, $link);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter un projet');
        }
        else {
            header('Location: console.php?action=manageProjects');
        }
    }

    public function viewEditProject ($projectId)
    {
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($projectId);
        require ('App/View/backend/editProjectView.php');
    }

    public function editProject ($id, $titleProject, $description, $techno, $image, $link)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier le projet');
        }
        else{
            header('location: console.php?action=project&id='.$id);
        }
    }

    public function listProjectsBack ()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
        require ('App/View/backend/manageProjectsView.php');
    }

    public function deleteProject($projectId)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->projectDelete($projectId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer le projet');
        }
        else {
            header('Location: console.php?action=manageProject');
        }
    }
    //Expériences
    public function newJob($entreprise, $logo, $position, $missions, $dateStart, $dateEnd)
    {
        $jobManager = new JobManager();
        $affectedLines = $jobManager->addJob($entreprise, $logo, $position, $missions, $dateStart, $dateEnd);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une expérience');
        }
        else {
            header('Location: console.php?action=manageJobs');
        }
    }

    public function viewEditJob ($jobId)
    {
        $jobManager = new JobManager();
        $job = $jobManager->getJob($jobId);
        require ('App/View/backend/editJobView.php');
    }

    public function editJob ($id, $entreprise, $logo, $position, $missions, $dateStart, $dateEnd)
    {
        var_dump('test');
        $jobManager = new JobManager();
        $affectedLines = $jobManager->jobEdit($id, $entreprise, $logo, $position, $missions, $dateStart, $dateEnd);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier l\'expérience');
        }
        else{
            header('location: console.php?action=job&id='.$id);
        }
    }

    public function listJobsBack ()
    {
        $jobManager = new JobManager();
        $jobs = $jobManager->getJobs();
        require ('App/View/backend/manageJobsView.php');
    }

    public function deleteJob($jobId)
    {
        $jobManager = new JobManager();
        $affectedLines = $jobManager->jobDelete($jobId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer l\'expérience');
        } else {
            header('Location: console.php?action=manageSkills');
        }
    }

    //formations
    public function newTraining($graduate, $date, $institution)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->addTraining($graduate, $date, $institution);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une formation');
        }
        else {
            header('Location: console.php?action=manageTrainings');
        }
    }

    public function viewEditTraining ($trainingId)
    {
        $trainingManager = new TrainingManager();
        $training = $trainingManager->getTraining($trainingId);
        require ('App/View/backend/editTrainingView.php');
    }

    public function editTraining ($id, $graduate, $date, $institution)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->trainingEdit($id, $graduate, $date, $institution);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier la formation');
        }
        else{
            header('location: console.php?action=training&id='.$id);
        }
    }

    public function listTrainingsBack ()
    {
        $trainingManager = new TrainingManager();
        $trainings = $trainingManager->getTrainings();
        require ('App/View/backend/manageTrainingsView.php');
    }

    public function deleteTraining($trainingId)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->trainingDelete($trainingId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer la formation');
        }
        else {
            header('Location: console.php?action=manageTrainings');
        }
    }
    //Compétences
    public function newSkill($skill, $logo)
    {
        $skillManager = new SkillManager();
        $affectedLines = $skillManager->addSkill($skill, $logo);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une compétence');
        }
        else {
            header('Location: console.php?action=manageSkills');
        }
    }

    public function viewEditSkill ($skillId)
    {
        $skillManager = new SkillManager();
        $skill = $skillManager->getSkill($skillId);
        require ('App/View/backend/editSkillView.php');
    }

    public function editSkill ($id, $skill, $logo)
    {
        $SkillManager = new SkillManager();
        $affectedLines = $SkillManager->skillEdit($id, $skill, $logo);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier la compétence');
        }
        else{
            header('location: console.php?action=skill&id='.$id);
        }
    }

    public function listSkillsBack ()
    {
        $SkillManager = new SkillManager();
        $skills = $SkillManager->getSkills();
        require ('App/View/backend/manageSkillsView.php');
    }

    public function deleteSkill($skill_id)
    {
        $skillManager = new SkillManager();
        $affectedLines = $skillManager->skillDelete($skill_id);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer la compétence');
        }
        else {
            header('Location: console.php?action=manageSkills');
        }
    }

    public function logout()
    {
        session_destroy ();
        header('location:index.php');
    }
}

