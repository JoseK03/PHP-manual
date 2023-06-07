
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
        'saldo' => 250,
        'tipo' => 'Premium',
        'nombre' => 'Jose'
    );

    asort($cliente); //todo Ordenar por valores (orden alfabetico)
    arsort($clientes); //todo Ordenar por valores (Z primero)
    ksort($clientes); //todo Ordena por llaves (ordern alfabetico)
    krsort($clientes); //todo Ordenar por llaves (orden alfabetico, DE LA A a la Z); 
    ?>

//? Isset() y Empty()
En PHP se utilizan para verificar si una variable o elemento de un array tiene un valor definido o no. Isset muestra si está definida y Empty si no lo está



    <?php
        $LaVariable = "Hola";

        if(isset($LaVariable)){
            echo "La variable si está definida y tiene valor";
        }else{
            echo "la variable no está definida y no tiene valor";
        }

        $OtraVariable = "";

        if(empty($OtraVariable)){
            echo "la varible está vacía y no está definida";
        }else{
            echo "la variable está definida y no está vacía";
        }
    ?>

//? Estructuras de control 
Herramientas que se utilizan para controlar el flujo de ejecucion de un programa
las mas ultizadas son //todo-- If --- switch --- for --- while -- do-while --- try catch 

//? IF 
Estructura de control que permite tomar decisiones en funcion de si se cumple o no una condicion 

    <?php
        if ("Condicion") {
            //* Intrucciones a seguir una vez la condicion se haya cumplido
        }else if("Otra condicion"){
            //* Intrucciones a seguir una vez la condicion se haya cumplido
        }else{//*else es para cuando ninguna condicion se cumpla se ejecute otra accion
            //* Intrucciones a seguir cuando ninguna condicion se haya cumplido
        }
        //todo--- Ejemplo:
        $numero = 5;

        if($numero > 10){
            echo "el numero es mayor que 10";
        }else if($numero = 5){
            echo "el numero es igual a 5";
        }else{
            echo "el numero es menor a 10";
        }
    ?>

//? switch
Estructura de control que permite ejecutar diferentes bloques de codigo dependiendo del valor de una variable 

    <?php
        switch ("expresion") {
            case $valor1:
            //* bloque de código si la expresión es igual a valor1
            break;//! break nos sirve para que una vez ejecutado el codigo se ropa el switch
            case $valor2:
            //* bloque de código si la expresión es igual a valor2
            break;
            default:
            //* bloque de código si la expresión no coincide con ninguno de los valores anteriores
            break;
            }

            $tecnologia = "HTML";

            switch ($tecnologia) {
                case 'PHP':
                    echo "PHP, es un excelente lenguaje!";
                    break;
                case 'JavaScript':
                    echo "Genial, el lenguaje de la web";
                    break;
                case 'HTML':
                    echo "Emmm...";
                    break;    
                default:
                    echo "Algún lenguaje que no sé cual es";
                    break;
            }
    ?>

//? Estructuas repetitivas 
Permiten la ejecucion de un codigo de manera repetitivas //!  Bucle While   Bucle do-while    Bucle for

    <?php
        while('condicion'){
            //* Código a ejecutar mientras la conficion sea verdadera
        }

        $i = 0;

        while($i < 10){
            echo $i . "<br>";
            $i++; //* Incremento
        }
        //!------------------------------
        do {
            //* Código que se ejecuta sí o sí al menos una ve
        } while ('condicion');

        $i = 100;

        do {
            echo $i. "<br>";
        } while ($i <= 10);
        //!------------------------------
        for ('inicializacion';'condicion';'incremento/decremento') { 
            //* Código a ejecutar en cada iteración
        }
    ?>     

//? ForEach
Metodo sencillo para iterar sobre arrays y objetos 
    <?php
        foreach ($variable as $key => $value) {
            //* Código que se ejecutara tras cada iteracion
        }
        
        $clientes = array('Pedro', 'Juan', 'Karen');

        foreach ($clientes as $cliente) {
            echo $cliente. "<br>";
        }

        $clientes = [
            'nombre' => 'Katherine',
            'edad' => '22',
            'profesion' => 'Nutrisionista'
        ];

        foreach ($clientes as $datos => $valor) {
            echo $datos . "-" . $valor. "<br>";
        }
    ?>
    //! otro Ejemplo mas elavorado 
    <?php
        $productos = [
            [
                'nombre' => 'tablet',
                'precio' => 200,
                'disponible' => true
            ],
            [
                'nombre' => 'televisor',
                'precio' => 600,
                'disponible' => false
            ],
            [
                'nombre' => 'Monitor curvo',
                'precio' => 400,
                'disponible' => true
            ]
        ];

        foreach ($productos as $producto) {
            /*//* <li>
                //todo<p>Producto:<?php echo $producto['nombre'];?></p>
                //todo<p>Precio: <?php echo $producto['precio'];?></p>
                //todo<p><?php echo($producto['disponible'])?'Disponible' : 'No Disponible'; ?></p>            
            //*</li> */
        }
    ?>

//? Funciones definidas por el usuario
Son bloques de codigo que se pueden llamar y ejecutar en cualquier parte del un programa para realizar una tarea especifica.

//? Funciones en PHP.
    function Identificador([p1],[p2]...){
        Expresiones...
    }
    
//? Funciones que no retornan un valor
En PHP a estos tipos de funciones se llaman //!  VOID.
Se utiliza la palabra reservada void aunque no es necesario el uso de esta para su ejecucion: 
    
    //*    declare(strict_types=1);
    //*    function sumar(int $numero1 = 0, array $numero2):void{
    //*        echo $numero1 + $numero2;
    //*    }
    //*    sumar(10,[]);
    
    //*    declare(strict_Types=1);
    //*    function sumatori(int $NUMERO1 = 0, array $NUMERO2){
    //*        echo $NUMERO1 + $NUMERO2;
    //*    }
    //*    sumar(10,[]);

//? Funciones que retornan un valor 
Son funciones que permiten recordar un valor al momento de finalizar la ejecucion de todas las expresiones

        <?php
            //declare(strict_types=1);
            function usuarioAutenticado(bool $autenticado) : ?string {
                if($autenticado){
                    return "El Usuario esta autenticado";
                }else{
                    return null;
                }
            }
            $usuario = usuarioAutenticado(false);
            echo $usuario;
        ?>
    es importante tener en cuenta que para indicar el tipo de dato que va a retornar la funcion se debe utilizar los dos puntos ( : ) seguido del interrogante ( ? ) y el tipo de dato a retornar

//? include , require , include_once , require_once
Son funciones que se utilizan para incluir archivos externos en un programa, sus diferencias princiaples es:
    //todo include
    incluye el archivo al programa varias veces como se desee.
    //todo include_once
    solo permite que el archivo se incluya una sola vez.
    //! require y require_once
    tienen la misma funcionalidad y diferencia pero con la gran diferencia es que si el archivo que se desea incluir no es encontrado el programa se detendra y no se seguira ejecutando.

//? Json_encode y Json_decode

//todo la function json_encode() se utiliza para convertir un aestructura de datos en PHP en una cadena JSON
//* La funcion json_decode() en PHP se utiliza para conventir una cadena JSON en una estructura de datos de PHP. Esta funcion toma una cadena JSON y la convierte en un objeto, un array asociativo o un valor segun corresponda.

//!Funciones mas usadas en manipulacion de data:

   - array_flip(): Intercambia las claves con sus valores correspondientes en un array
   - array_fill(): Rellena un array con un valor especificado.
   - array_filter(): Filtra los elementos de un array utilizando una funcion de devolucion de llamada.
   - array_map():Aploca una funcion a cada elemento de un array y devileve un anuevo array con los resultados.
   - array_reduce():Reduce un array a un solo valor aplicando una funcion de devolucion de llamada.
   - array_key_exists(): Comprueba si una clave existe en un array.
   - in_array():Comprueba si un valor existe en un array.
   - array_rand():Devuelve una o varias claves aleatorias de un array.
   - array_unique(): Elimina los valores duplicados en un array.
   - array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
   - array_diff(): devuleve un array con los valores del primer array que no estan presentes en los arrays adicionales.
   - array_push(): Agrega uno o mas elementos al final del array.
   - array_pop():Extrae y elimina el ultimo elemento del array.
   - array_reverse(): Revierte el orden de los elementos de un array.
   - array_sum(): Devuelve la suma de los elementos de un array númerico.

//! POO EN PHP 
//TODO---> PROGRAMACION ORIENTADA A OBJETOS

