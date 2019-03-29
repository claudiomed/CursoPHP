<?php
    class Entrada{
        
        private $id;
        private $usuario_id;
        private $categoria_id;
        private $titulo;
        private $descripcion;
        private $fecha;
        
        public function __construct($id, $usuario_id, $categoria_id, $titulo, $descripcion, $fecha) {
            $this->id = $id;
            $this->usuario_id = $usuario_id;
            $this->categoria_id = $categoria_id;
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->fecha = $fecha;
        }
        
        function getId() {
            return $this->id;
        }

        function getUsuario_id() {
            return $this->usuario_id;
        }

        function getCategoria_id() {
            return $this->categoria_id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getFecha() {
            return $this->fecha;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setUsuario_id($usuario_id) {
            $this->usuario_id = $usuario_id;
        }

        function setCategoria_id($categoria_id) {
            $this->categoria_id = $categoria_id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }



        
    }
    

?>

