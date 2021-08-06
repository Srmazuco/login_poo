<?php 
include 'db.php';

if(isset($_SESSION['id'])){
    header("location:home.php");
}

$db->login();

?>


<form method="post">
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="senha" placeholder="Senha"><br><br>
    <input type="submit" value="Entrar">
</form>