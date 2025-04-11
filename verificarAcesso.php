<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if((!isset ($_SESSION['logado']) || (!isset ($_SESSION['id_usuario'])) == true))
{
    header('location:acessoNegado.php');
    die();
}
?>