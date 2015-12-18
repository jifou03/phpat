<?php ?>

<?php if(! $site_data[USER_IS_LOG]){
    //si l'utilisateur n'est pas connecté
    ?>
    <form id="login" name="login">
        <label for="username">Pseudo: </label>
        <input type="text" name="username" id="username" value="">
        <label for="password">Mot de passe: </label>
        <input type="password" name="password" id="password">
        <input type="submit" name="dologin" id="dologin" value="Entrer">
    </form>
<?php } else {//si l'utilisateur est connecter ?>
    <form id="logout" name="logout">
        <input type="submit" name="dologout" id="logout" value="Quitter">
    </form>
<?php } ?>
