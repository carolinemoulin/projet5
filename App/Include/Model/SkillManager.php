<?php

namespace App\Model;
require "../vendor/autoload.php";

class SkillManager extends Manager
{
    public function addSkill($skill, $logo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO skills(skill, logo) VALUES(?,?)');
        $affectedLines = $req->execute(array($skill, $logo));
        return $affectedLines;
    }

    public function getSkill($skillId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, skill, logo FROM skills WHERE id = ?');
        $req->execute(array($skillId));
        $skill = $req->fetch();
        return $skill;
    }

    public function skillEdit ($id, $skill, $logo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE skills SET logo = ?, level = ?  WHERE id = ?');
        $skill = $req->execute(array($id, $skill, $logo));
        return $skill;
    }

    public function getSkills()
    {
        $db = $this->dbConnect();
        $skill = $db->query('SELECT id, skill, logo FROM skills');
        return $skill;
    }

    public function skillDelete($skillId) {
        $db = $this->dbConnect();
        $skill = $db->prepare("DELETE FROM skills WHERE id=".$skillId);
        $affectedLines = $skill->execute(array($skillId));
        return $affectedLines;
    }
}