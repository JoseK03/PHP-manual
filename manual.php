
//!---------------------------------MANUAL PHP -------------------------------------

LA ESTRUCTUA BASICA DE PHP:

    <?php 
    
    //!contenido

    ?>

//?  ---Funciones de salida.----

echo(); = es la funcion mas comun en php

    <?php echo "Texto a imprimir";  ?>

print(); = funcion parecida a echo con la diferencia de que solo se puede imprimir una cadena de texto a la vez

    <?php 
        $saludo = "Hola mundo";
        print($saludo);
    ?>

sprintf(); = Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en
la salida estándar, devuelve la cadena formateada como resultado

    <?php
        $texto= "mundo";
        $mensaje= sprintf("Hola",$texto);
        echo $mensaje;
    ?>

//? ------- Variables y Constantes -------

las variables de PHP se definen con el simbolo $ seguido el nombre de la variable y el valor de esta variable va seguido del operador =

    <?php
        //todo---Declarar una variable númerica.
        $edad = 25;
        //todo---Declarar una variable de texto.
        $nombre = "Juan";
        //todo---Declarar una variable tipo Booleana.
        $EsValido = true;
        echo var_dump($nombre);
    ?>

Las constantes en PHP al igual que en cualquier otro lenguaje no cambian su valor durante la ejecucion del codigo.

    <?php
         //todo---Declarar una variable númerica.
         define("PI", 3.1416);
         //todo---Declarar una variable de texto.
         define("NOMBRE", "Juan");
         //todo---Declarar una variable tipo Booleana.
         define("ES_VALIDO", true);
    ?>

//? --------Tipos de datos.--------

En PHP existen varios tipos de datos que permiten almacenar diferentes tipos de información.

    <?php
        //* BOOLEAN  almacena valor de verdad o falsedad.
        $logueado = true;
        var_dump($logueado);

        //* Enteros numero entero sin decimal
        $numero = 200;
        var_dump($numero);

        //* Floats numero con decimal
        $float = 22.5;
        var_dump($float);

        //* Strings  tipo de dato cadena
        $nombre = "Jose";
        var_dump($nombre);

        $array = [];
        var_dump($array);
    ?>

//?-----Arreglos, Arreglos asociativos y funciones para arreglos-----

Son estructuras de datos que nos permiten alamcenar multiples valores en una sola variable .
    <?php
        $MiArreglo = array("valor1","valor2","valor3");

        $carro = ['tablet', 'televisor', 'computador'];

        //* mostrar todo el array
        var_dump($carro);

        //* Acceder a un elemento del array indicando su posición
        echo $carro[1];

        //* Añade un elemento ne el indicie 3 del array
        $carro[3] = 'nuevo producto';

        //* Añadir elemente nuevo al final
        array_push($carro, 'audifonos');

        //* Añadir al inicio
        array_unshift($carro, 'reloj');        
    ?>

los arrays asociativos permiten asociar las claves con sus valores a diferencia de los arrays indexados que solo se puede acceder a sus valores por medio de numeros.

    <?php
        $ArrayAsociativo = array(
            "clave1" => "valor1",
            "clave2" => "valor2",   
            "clave3" => "valor3",
        );

        //*Para acceder a un valor del array llamamos a su clave

        echo $ArrayAsociativo["clave2"]; //todo IMPRIME "valor2"
    ?>

//? Arrays asociativos utilizando bucle foreach

    <?php
        //! Sintaxis basica
        foreach ($variable as $key => $value) {
            # code...
        }

        //todo-- usado a nuestro array  $ArrayAsociativo
        foreach ($ArrayAsociativo as $clave => $valor) {
                echo "Clave: ". $clave . ", Valor:". $valor;
        }
    ?>

//? otras funciones en arreglos

    <?php
    //* in_array   Buscar elementos en un arreglo
    $carrito =['tablet', 'televisor', 'computadora'];

    var_dump( in_array('tablet', $carrito));
    var_dump( in_array('televisor', $carrito));

    //* Ordenar elementos de un arreglo
    $numeros = array(1,2,3,4,5,1,2);
    sort($numeros);//todo de Menor a mayor;
    rsort($numeros);//todo de Mayor a menor;
    
    //* Ordenar arreglo asociativo
    $cliente = array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Jose'
    );

    asort($cliente); //todo Ordenar por valores (orden alfabetico)
    arsort($clientes); //todo Ordenar por valores (Z primero)
    ksort($clientes); //todo Ordena por llaves (ordern alfabetico)
    krsort($clientes); //todo Ordenar por llaves (orden alfabetico, DE LA A a la Z); 




    ?>


        