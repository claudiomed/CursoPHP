<?php

    //namespace modelos;
    
    class Usuario{
        
        private $nombre;
        private $apellido;
        private $email;
        private $password;
        
        public function __construct($nombre, $apellido, $email, $password) {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->email=$email;
            $this->password=$password;
        }
        
        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }

        function getEmail() {
            return $this->email;
        }

        function getPassword() {
            return $this->password;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPassword($password) {
            $this->password = $password;
        }


        
        


        
    }
    
    $user=new Usuario('Claudio', 'Medrano', 'cmedrano1490@gmail.com', 'Password');
    var_dump($user);
    
?>

