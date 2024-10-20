<?php

$url = (!empty($_GET['url']))?$_GET['url']:$_GET['url']='home';

//converter a url em array:
$url = explode('/', $url);

$arquivo = 'paginas/'.$url[0].'.php';

if(is_file($arquivo)){
    include $arquivo;
}else{
    include 'paginas/404.php';
}

include_once "./Config/conf.php";
include_once "./include/menu.php";

echo "<pre>";
#var_dump($url);
#echo "<pre>";
#var_dump($arquivo);