<?php
    //incluir clase
    include_once 'claseProducto.php';
    include_once 'carrito.php';

    //crear listas de productos
    $producto1=new Producto("Refrigerador", 9699, "Samsung", "384L", 1);
    $producto2=new Producto("Microondas", 269, "LG", "MWI-20TCRP", 1);
    $producto3=new Producto("Batidora Electrica", 99, "Falabella", "500W Inox IIPor", 2);
    $producto4=new Producto("Moledora", 400, "Dessini", "AR-172", 1);
    $producto5=new Producto("Olla Arrocera", 249, "Oster", "PH-32", 1);
    $producto6=new Producto("Cocina", 1999, "Oster", "SD-12", 1);
    $producto7=new Producto("Licuadora", 194, "Dessini", "SD8NB", 1);
    $producto8=new Producto("Televisor", 2959, "Dessini", "9DF9J", 1);
    $producto9=new Producto("Plancha", 129, "Samsung", "DKS7", 3);
    $producto10=new Producto("Cafetera", 299, "Oster", "JF23", 1);
    $producto11=new Producto("Hervidor", 199, "Oster", "HT54", 1);
    $producto12=new Producto("Cafetera", 199, "Samsung", "ITL2", 2);
    $producto13=new Producto("Freidora de aire", 259, "Oster", "F-98R", 1);
    $producto14=new Producto("Tostadora", 199, "Thomas", "230-TST", 2);
    $producto15=new Producto("Calefactor", 89, "Thomas", "HT230", 1);
    $producto16=new Producto("Estufa", 4989, "Thomas", "Th120", 1);
    $producto17=new Producto("Lavadora", 1399, "LG", "GH4", 1);
    $producto18=new Producto("Secadora", 1199, "LG", "SDG2", 1);
    $producto19=new Producto("Aspiradora", 499, "LG", "HDF2", 1);
    $producto20=new Producto("Ventilador",189, "Samsung", "THT 23", 1);

    //crear carrito de compras
    $car=new Carrito();

    //agregar productos al carro
    $car->AgregarProducto($producto1);
    $car->AgregarProducto($producto2);
    $car->AgregarProducto($producto3);
    $car->AgregarProducto($producto4);
    $car->AgregarProducto($producto5);
    $car->AgregarProducto($producto6);
    $car->AgregarProducto($producto7);
    $car->AgregarProducto($producto8);
    $car->AgregarProducto($producto9);
    $car->AgregarProducto($producto10);
    $car->AgregarProducto($producto11);
    $car->AgregarProducto($producto12);
    $car->AgregarProducto($producto13);
    $car->AgregarProducto($producto14);
    $car->AgregarProducto($producto15);
    $car->AgregarProducto($producto16);
    $car->AgregarProducto($producto17);
    $car->AgregarProducto($producto18);
    $car->AgregarProducto($producto19);
    $car->AgregarProducto($producto20);



    //mostrar los productos al carrito
    $car->MostrarCarro();

    //calcular y mostrar el total
    echo "Total a pagar: ".$car->CalcularTotal()." soles";
?>