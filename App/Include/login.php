<form name="loginform" id="loginform" action="console.php?action=login" method="post">
    <p>
        <label for="user_login">
            Identifiant <br>
            <input type="text" name="log" id="user_login" class="input" value size="20">
        </label>
    </p>
    <p>
        <label for="user_pass">
            Mot de passe <br>
            <input type="password" name="pwd" id="user_pass" class="input" value size="20">
        </label>
    </p>
    <p class="forgetnot">
        <label for="rememberme">
            <input name="rembemberme" type="checkbox" id="rememberme" value="forever">
            Se souvenir de moi
        </label>
    </p>
    <p class="submit">
        <input type="submit" name="submit" class="button button-primary button large" value="Se connecter">
    </p>

</form>