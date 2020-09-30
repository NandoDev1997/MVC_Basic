<?php 

class Inicio extends Controlador{

    public function __construct(){
      
    }

    public function index(){
        

        $datos = [
            'titulo' => 'Inicio',
            'subtitulo' => '',
        ];

        $this->vista('inicio', $datos);

    }
}    



