<?php
session_start();
if(!isset($_SESSION['tipo']) or $_SESSION['tipo'] != 'admin' ){
    die('<h1>Error 404</h1>');
}

?>