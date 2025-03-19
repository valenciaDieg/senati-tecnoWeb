<?php
    class Producto{
        private $nombre;
        private $precio;
        private $marca;
        private $modelo;
        private $cantidad;


        public function __construct($nombre, $precio, $marca, $modelo, $cantidad){
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->cantidad=$cantidad;
        }


        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getCantidad(){
            return $this->cantidad;
        }


        public function setNombre(){
            $this->nombre=$nombre;
        }
        public function setPrecio(){
            $this->precio=$precio;
        }
        public function setMarca(){
            $this->marca=$marca;
        }
        public function setModelo(){
            $this->modelo=$modelo;
        }
        public function setCantidad(){
            $this->cantidad=$cantidad;
        }


        public function mostrarInformacion(){
            echo"Producto: ".$this->nombre."<br>";
            echo"Precio: ".$this->precio." Soles<br>";
            echo"Marca: ".$this->marca."<br>";
            echo"Modelo: ".$this->modelo."<br>";
            echo"Cantidad: ".$this->cantidad."<br>";
        }
    }
?>