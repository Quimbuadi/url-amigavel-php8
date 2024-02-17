<?php
require_once "../Config/Session.php";
var_dump($_SESSION);
echo "<br>";
echo session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="esquerda">
                <h1>Perdidos e Achados</h1>
            </div>

            <div class="direita">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">NOVOS</a></li>
                    <li><a href="">INFO</a></li>
                    <li><a href="">SOBRE-NÓS</a></li>
                    <li><a href="">SAIR</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>