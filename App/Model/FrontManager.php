<?php

namespace App\Model;
require "../vendor/autoload.php";

class FrontManager extends Manager
{
    public function getProjects()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, titleProject, description, techno, image, link FROM projects');
        $req ->execute();
        $projects = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $projects;
    }

    public function getJobs()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, entreprise, logo, position, missions, DATE_FORMAT(dateStart, \'%m/%Y\')AS dateStart_fr, DATE_FORMAT(dateEnd, \'%m/%Y\')AS dateEnd_fr FROM jobs ORDER BY dateEnd DESC');
        $req ->execute();
        $jobs = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $jobs;
    }

    public function getTrainings()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, graduate, date, institution FROM training ORDER BY date DESC');
        $req ->execute();
        $trainings = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $trainings;
    }

    public function getSkills()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, skill, logo FROM skills');
        $req ->execute();
        $skills = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $skills;
    }
}