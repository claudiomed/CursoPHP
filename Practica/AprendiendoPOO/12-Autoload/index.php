<?php
    
    require 'autoload.php';
   
    class Principal{
        
        public $usuario;
        public $categoria;
        public $entrada;
        
        public function __construct($usuario, $categoria, $entrada) {
            $this->usuario = $usuario;
            $this->categoria = $categoria;
            $this->entrada = $entrada;
        }
        
        function getUsuario() {
            return $this->usuario;
        }

        function getCategoria() {
            return $this->categoria;
        }

        function getEntrada() {
            return $this->entrada;
        }

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setCategoria($categoria) {
            $this->categoria = $categoria;
        }

        function setEntrada($entrada) {
            $this->entrada = $entrada;
        }
        
        
    }
    
    $user=new Usuario('Claudio', 'Medrano', 'cmedrano1490@gmail.com', 'Password');
    
    
    $categoria=new Categoria(1, 'Deportes');
    $entrada=new Entrada(1, 1, 1, 'Barcelona campeon', 'Texto generico', '03/31/2019');
    
    $principal= new Principal($usuario, $categoria, $entrada);
    
    var_dump($principal);
    
    
    
    
    

    
?>
