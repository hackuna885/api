<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';

if($usuario === '' || $pass === ''){
    echo json_encode('error');
}else{
    echo json_encode('Correcto: <br> Usuario: '.$usuario.'<br> Password: '.$pass);
}

?>