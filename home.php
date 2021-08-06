<?php 

include 'db.php';

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    echo "Bem vindo: ".$_SESSION['email']."<br>";
    echo "<a href='sair.php'>Sair</a>";
}

?>