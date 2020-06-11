<?php

namespace App\Controller;

require "../vendor/autoload.php";

use App\Model\FrontManager;


class Frontend
{
    public function listProjects()
    {
        $frontManager = new FrontManager();
        $projects = $frontManager->getProjects();
        $jobs = $frontManager->getJobs();
        $trainings = $frontManager->getTrainings();
        $skills = $frontManager->getSkills();
        require('App/View/frontend/hostView.php');
    }

}