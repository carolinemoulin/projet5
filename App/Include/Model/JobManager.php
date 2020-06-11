<?php

namespace App\Model;
require "../vendor/autoload.php";

class JobManager extends Manager
{
    public function addJob($entreprise, $logo, $position, $missions, $dateStart, $dateEnd)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO jobs(entreprise, logo, position, missions, dateStart, dateEnd) VALUES(?,?,?,?,?,?)');
        $affectedLines = $req->execute(array($entreprise, $logo, $position, $missions, $dateStart, $dateEnd));
        return $affectedLines;
    }

    public function getJob($JobId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, entreprise, logo, position, missions, dateStart, dateEnd FROM jobs WHERE id = ?');
        $req->execute(array($JobId));
        $job = $req->fetch();
        return $job;
    }

    public function jobEdit ($id, $entreprise, $position, $logo, $missions, $dateStart, $dateEnd)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE jobs SET entreprise = ?, logo = ?, position = ?, missions = ?, dateStart = ?, dateEnd = ? WHERE id = ?');
        $job = $req->execute(array($id, $entreprise, $logo, $position, $missions, $dateStart, $dateEnd));
        return $job;
    }

    public function getJobs()
    {
        $db = $this->dbConnect();
        $job = $db->query('SELECT id, entreprise, logo, position, missions, DATE_FORMAT(dateStart, \'%m/%Y\')AS dateStart_fr, DATE_FORMAT(dateEnd, \'%m/%Y\')AS dateEnd_fr FROM jobs ORDER BY dateEnd DESC');
        return $job;
    }

    public function jobDelete($jobId) {
        $db = $this->dbConnect();
        $job = $db->prepare("DELETE FROM jobs WHERE id=".$jobId);
        $affectedLines = $job->execute(array($jobId));
        return $affectedLines;
    }
}