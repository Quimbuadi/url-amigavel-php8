<?php

#obtendo a url amigavel
$request_uri = $_SERVER['REQUEST_URI'];

#divindo a url separada por / para obter o caminho

$path = explode('/', $request_uri);
$project_name = $path[1];

echo "<pre>";

print_r($path);
if($path[2]==""){
    echo "sim";
}else{
    echo "não";
}
echo "<br>";
var_dump($request_uri);

echo $_GET['url'];
