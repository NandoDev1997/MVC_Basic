<?php 
// cargamos todas las librerias
require_once 'config/configurar.php';
require_once 'helpers/url_helper.php';

// carga automatica de clases
spl_autoload_register(function($nombreClase){
    require_once 'librerias/'.$nombreClase.'.php';
});