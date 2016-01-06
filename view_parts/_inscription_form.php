<?php
var_dump($_POST);
//validatoion
?>


<form id="formulaire" action="" method="post">
    <ul>
        <li><label class="inscription" for="nom">Nom :</label>
            <input type="text" name="nom" id="nom"/></li>
        <li><label class="inscription" for="prenom">Prenom :</label>
            <input type="text" name="prenom" id="prenom"/></li>
        <li><label class="inscription" for="courriel">Courriel :</label>
            <input type="text" name="courriel" id="courriel"/></li>
        <li><label class="inscription" for="nomutilisateur">Nom d'utilisateur :</label>
            <input type="text" name="nomutilisateur" id="nomutilisateur"/></li>
        <li><label class="inscription" for="password">Password :</label>
            <input type="password" name="password" id="password"/></li>
        <li><input type="submit" id="submit" name="submit" value="Soumettre"/></li>
    </ul>
</form>