<?php

    class Persona {
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $edad;

        function __construct($nombre, $apellido1, $apellido2, $edad){
            $this -> nombre = $nombre;
            $this -> apellido1 = $apellido1;
            $this -> apellido2 = $apellido2;
            $this -> edad = $edad;
        }

        function getNombre(){
            return $this -> nombre;
        }

        function getApellido1(){
            return $this -> apellido1;
        }

        function getApellido2(){
            return $this -> apellido2;
        }

        function getEdad(){
            return $this -> edad;
        }

        function imprimirDatos(){
            echo "Nombre: ".$this -> nombre;
            echo "</br>";
            echo "Apellido1: ".$this -> apellido1;
            echo "</br>";
            echo "Apellido2: ".$this -> apellido2;
            echo "</br>";
            echo "Edad: ".$this -> edad;
        }
    }

    $p1 = new Persona("Pepe", "López", "Martinez", 30);
    $p1 -> imprimirDatos();

?>