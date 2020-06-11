<?php

namespace App\Model;
require "../vendor/autoload.php";

class TrainingManager extends Manager
{
    public function addTraining($graduate, $date, $institution)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO training(graduate, date, institution) VALUES(?,?,?)');
        $affectedLines = $req->execute(array($graduate, $date, $institution));
        return $affectedLines;
    }

    public function getTraining($trainingId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, graduate, date, institution FROM training WHERE id = ?');
        $req->execute(array($trainingId));
        $training = $req->fetch();
        return $training;
    }

    public function trainingEdit ($id, $graduate, $date, $institution)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE training SET graduate = ?, date = ?, institution = ?  WHERE id = ?');
        $training = $req->execute(array($id, $graduate, $date, $institution));
        return $training;
    }

    public function getTrainings()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, graduate, date, institution FROM training ORDER BY date DESC');
        $req ->execute();
        $trainings = $req->fetchAll();
        return $trainings;
    }

    public function trainingDelete($trainingId) {
        $db = $this->dbConnect();
        $training = $db->prepare("DELETE FROM training WHERE id=".$trainingId);
        $affectedLines = $training->execute(array($trainingId));
        return $affectedLines;
    }
}