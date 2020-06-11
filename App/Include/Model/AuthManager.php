<?php

namespace App\Model;
require "../vendor/autoload.php";

class AuthManager extends Manager
{
    public function getMember($pseudo)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT id, pseudo, pass, level, email FROM users WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $result = $req->fetch();
        return $result;
    }
}