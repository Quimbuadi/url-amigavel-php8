<?php

require_once "../core/db.php";
require_once "../Config/Session.php";

$email = $_POST['email'];
$senha = $_POST['password'];

if(isset($_POST["btn-enviar"])){

    $stmt = $db->prepare("SELECT email, password from usuario");
    $stmt->execute();
    $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if(count($resultado)){

        foreach($resultado as $linha){
            if(($linha['email']==$email && $linha['password']==$senha)){
                echo $linha['email']."==".$linha['password'];
                $_SESSION['logado'] = true;
                session_regenerate_id();
                header("location: ../views/home.php");
                break;
            }else{
                header("location: ../index.php");
            }
        }
    }

}else{
    echo "não foi definido nada na super global post";
}
