<?php

namespace www\App\Model;
require "../vendor/autoload.php";

class UserManager extends Manager
{
    public function checkPseudo($pseudoToCheck)
    {
        $db = $this->dbConnect();
        //requete retourne 1 si pseudo existe
        $req = $db->prepare('SELECT COUNT(*) AS pseudo FROM users WHERE pseudo = ?');
        $req->execute(array($pseudoToCheck));
        $pseudo = $req->fetch();

        return $pseudo['pseudo'];
    }

    public function pushMember($pseudo, $pass_hash, $email)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO users(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        //On rempli la BDD avec les infos du formulaire
        $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hash,
            'email' => $email));
    }

    public function userDelete($userId)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('DELETE FROM users WHERE id='.$userId);
        $affectedLines = $user->execute(array($userId));
        return $affectedLines;
    }
}