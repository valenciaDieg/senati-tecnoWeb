<?php
    class Carrito{
        //propiedades
        private $productos=[];
        //metodos
        public function AgregarProducto(Producto $producto){
            $this->productos[]=$producto;
        }
        public function MostrarCarro(){
            echo"Carrito de Compras:"."<br><br>";
            foreach($this->productos as $producto){
                $producto->mostrarInformacion();
                echo "<hr>";
            }
        }
        public function CalcularTotal (){
            $total=0;
            foreach($this->productos as $producto){
                $total+=$producto->getPrecio();
            }
            return $total;
        }
    }
?>