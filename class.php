<?php


class Main 
{
    private $db;

    function __construct($db)
    {
        $this->db = $db;   
    }

    function login()
    {
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $sql = $this->db->prepare(" SELECT * FROM usuarios WHERE email = :email AND senha = :senha ");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount()){
                $data = $sql->fetch();
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                header("Location: home.php");
            }else {
                echo "Email e senha errado";
            }

        }
    }
}