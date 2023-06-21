//? Bases de datos relacionales.
son un tipo de sistema de getion de bases de datos qie organiza la informacion en tablas estructuradas y establece relaciones entre ellas 
//! la base de datos relacional esta compuesta por filasy columnas.
las relaciones entre las tablas se establecen mediante claves primarias y foraneas.
//todo-> Una CLAVE PRIMARIA es un atributo o cunjunt de atributos que identifica de forma unica cada fila en una tabla
//* Una CLAVE FORANEA es un atributo en una tabla que have rederencia a la clave primaria  de otra tabla,estableciendo asi una relacion entre ellas 


//todo VENTAJAS DE UN SISTEMA DE GESTION DE BASES DE DATOS RELACIONALES:
-Menos redundancia.
-Prevencion de inconsistencias.
-Eficacia.
-Integridad de los datos.
-Confidencialidad.

//! REGLAS PARA TABLAS DE BASES DE DATOS
-Cada tabla tiene un nombre distinto.
-Cada tabla puede contener varuas filas.
-Cada tabla tiene un calor para identificar de forma única las filas.
-Cada columna de una tabla tiene un nombre único.
-Las entradas en las columnas son valores únicos.
-Las entradas en las columnas son del mismo tipo.
-El orden de las filas y las columnas no es importante.

//? Entidades y Atributos.
Las entidades pueden ser interpretads como categorias de cosas que son importantes para un negocioy sobre las que se debe conservar informacion y las entidades contienen informacion que el negocio debe conocer y recordar


//? Indentificadores Únicos.
Es un atributo que permite identificar de manera exclusiva cada registro en una tabla.
tambien se le conoce como //! Clave primaria o PRIMARY KEY.
//todo-> Algunas caracteristicas de los Indentificadores unicos:
    -Unicidad: cada valor debe ser único.
    -No nulidad: no puede contener valores nulos 
    -Estabilidad:  los valores deben ser estables y no cambiar con el tiempo.
    -Idexacion: suelen ser usados para crear indices en las tablas. Esto mejora el rendimiento
    -referencialidad: Pueden utilizarse como referencias en las relaciones entre tablas.


//? Relaciones.
Las relaciones representan una asociacion entre dos o mas entidades, la linea de relacion puede ser obligatoria u opcional
Las realciones tienen nombres que ayudan a describir la conexion entre las entidades


//? Clave ajena (FORANEA)
Son atributos que se utilizan para establecer relaciones entre dos tablas en una base de datos relacionales.
-Cuando una tabla contiene una clave foranea, significa que contiene un atributo o conjunto de atributos que hace referencia a la clave primaria de otra matTabLabel
 a continuacion algunas caracteristicas importantes de las claves y/o llaves foraneas:

    -Relacion entre tablas:las relaciones pueden ser de uno a uno, uno a muchos o muchos a muchos.
    -Integridad referencial: No se pueden agregar, modificar o eliminar registros en la tabla relacionada de una manera que rompa la relacion
    -Restricciones de integridad: restricciones asociadas, com la resticion de clave externa
    -Consultas y operaciones: permiten hacer consultas y operaciones que involucran distintas tablas mediante la combinacion de informacion relacionada. se pueden utilizar JOINS y recuperar datos de manera eficiente
    -Mantenimiento de consistencia: asegura que los datos relacionados se mantenganconsistentes en diferentes tablas, si se actualiza en la tabla principal tambien se actualizara en las otras para mantener la integridad de los datos.


//? Normalizacion de Bases de datos.
Es un proceso de diseño que se utiliza para organizar y estructurar las tablas de una base de datos relacional de manera eficiente y libre de redundancias.
el principal proposito es eliminar la duplicacion de datos y garantizar la integridad y consistencia de la informacion 
El proceso de normalizacion se divide en 5 normas a continuacion explcaremos las 3 más comunes:
    //* Primera forma normal(1NF):
        *Elimine los grupos repetidos de las tablas individuales.
        *Cree una tabla independiente para cada conjunto de datos relacionados.
        *Identifique cada conjunto de datos realcionados con una clave principal.

    //* Segunda forma normal(2NF):
        *Cree tablas independienes para conjuntos de valores que se apliquen a varios registros.
        *Relacione estas tablas con una clave externa.
    
    //* Tercera forma normal(3NF):
        *Elimine los campos que no dependan de la clave.
        

//? MySQL
Es un sistema manejador de bases de datos de libre uso y distribucion bajo latencia GPL de los mas utilizados y que esta disponible para varios sistemas operativos
Caracteristicas de MySQL
    -Velociadad 
    -Facilidad de uso
    -Soporta le lenguaje SQL
    -Robustez
    -Portabilidad
    -Conectividad 
    -Seguridad 

//? Tipos de datos númericos.
    -TINYINT 
    -BIT
    -SMALLINT 
    -MEDIUMINT 
    -INT -> //! SE USA PARA EL ID
    -BIGINT -> ///TODO  la usamos para numeros telefonicos o cualquier otro valor que requiera un numero grande

//? Tipo de datos en coma flotante o decimal
    -FLOAT -> Contiene un numero en coma flotante de precision sencilla
    -DOUBLE -> Contiene numero en coma flotante de precision doble
    -DECIMAL -> Se ultiliza para guardar valores donde es importante preservar su precisión exacta por ejemplo datos monteraios como el salario.

//? Tipo de datos de caracter
    -CHAR -> valores de 0 a 255 caracteres 
    -VARCHAR -> valores de 0 a 255 caracteres
    -BLOB -> longitud maxima de 65.535 caracteres //*ideal para imagenes, ficheros de texto, audio o video
    -TEXT -> longitud de 65.535 ideal para texto plano sin formato 
    -TINYTEXT -> longitud maxima de 255 caracteres
    -MEIDUMTEXT -> longitud maxima de 16777215 caracteres
    -LONGTEXT -> longitud maxima de 4294967298 caracteres

//? Tipo de datos fecha
    -DATE -> para almacenar fecha con año, mes dia -> AAAA-MM-DD
    -DATETIME -> almacena fecha y hora -> AAAA-MM-DD HH:MM:SS
    -TIME-> almacena hora -> HH:MM:SS

//? Modificadores y Constraints
    -AUTO_INCREMENT -> valor que se incrementa de manera automatica
    -DEFAULT -> Coloca un valor por defecto
    -NOT NULL -> impide que el campo sea nulo 
    -PRIMARY KEY -> hace que el campo se considere llave primaria 
    -UNIQUE -> evita la repeticion de valores

//? SQL STRUCTURED QUERY LANGUAGE 
Es un lenguaje de programación utilizado para administrar y
manipular bases de datos relacionales.
SQL permite a los usuarios crear, modificar y eliminar bases de datos, así como realizar consultas
para recuperar información específica de una base de datos. Con SQL, puedes crear tablas para
almacenar datos, definir relaciones entre las tablas, agregar, actualizar o eliminar registros y realizar
consultas complejas para obtener información precisa.

El lenguaje SQL consta de varios comandos, entre los que se incluyen:
        *DDL: define y modifica la estructura de la base de datos. Incluye comandos como CREATE, ALTER y DROP para crear, modificar y eliminar tablas,
        índices, vistas, etc.
        *DML: manipula los datos almacenados en la base de datos. Incluye comandos como INSERT, UPDATE y DELETE para agregar, actualizar y
        eliminar registros.
        *DQL: realiza consultas y recupera informacion de la base de datos.El comando más común es SELECT, que permite especificar los criterios de
        búsqueda y los campos a recuperar.
        *DCL: controla los privilegios de acceso a la base de
        datos. Incluye comandos como GRANT y REVOKE para otorgar y revocar permisos.


//? Que se puede hacer en SQL
    *Crear y administrar bases de datos: Puedes utilizar SQL para crear nuevas bases de datos y
                                         administrar su estructura. Esto incluye crear tablas, definir columnas, establecer restricciones
                                         de integridad, crear índices y definir relaciones entre tablas.
    *Insertar, actualizar y eliminar datos: Puedes utilizar comandos SQL como INSERT, UPDATE y
                                            DELETE para agregar, modificar y eliminar registros en las tablas de la base de datos. Esto te
                                            permite mantener y actualizar los datos almacenados.
    * Consultar datos:  SQL es especialmente útil para realizar consultas complejas y recuperar datos
                        específicos de una base de datos. Puedes utilizar el comando SELECT para especificar los
                        criterios de búsqueda, filtrar los resultados, ordenar los datos y combinar información de
                        varias tablas mediante joins.
    * Filtrar y ordenar datos:  SQL te permite filtrar los resultados de las consultas utilizando
                                condiciones en la cláusula WHERE. También puedes ordenar los resultados utilizando la
                                cláusula ORDER BY, lo que te permite obtener los datos en el orden deseado.
    * Agregar funciones y cálculos: SQL ofrece varias funciones integradas, como SUM, AVG,
                                    COUNT, MAX, MIN, entre otras, que te permiten realizar cálculos y resúmenes de los datos
                                    almacenados en la base de datos. Puedes utilizar estas funciones en las consultas para obtener
                                    resultados agregados o realizar operaciones matemáticas.
    *Crear vistas:  Las vistas son consultas almacenadas que se pueden utilizar como tablas virtuales. Puedes crear vistas en SQL para simplificar consultas complejas, reutilizar consultas
                    comunes o presentar una vista específica de los datos sin exponer toda la estructura de la base de datos.
    * Establecer restricciones de integridad:SQL te permite establecer restricciones de integridad en las tablas para garantizar la consistencia y la calidad de los datos. Puedes definir
                                             restricciones como claves primarias, claves foráneas, restricciones de unicidad y restricciones de verificación.
                                        
    

//?Comandos DDL 
se utilizan para definir, modificar y eliminar la estructura de la base de datos. Estos comandos permiten crear tablas, definir restricciones, modificar
la estructura de las tablas existentes y eliminar objetos de la base de datos.

//? SHOW DATABASE
Muestra la base de datos

//? CREATE DATABASE
Crea una base de datos despues del comando se coloca el nombre de la base a crear

//?DROP DATABASE
Elimina una base de datos despues del comando se coloca el nombre de la base a eliminar

//? USE 
da uso a la base de datos despues del comando se coloca el nombre de la base a usar

//? CREATE TABLE
permite crear la tabla despues del comando va el nombre de la tabla

//? DESCRIBE 
permite visualizar la tabla despues del comnando va el nombre de la tabla

//? ALTER TABLE
permite modificar la estructura de la tabla

//? Eliminar columna 
        ALTER TABLE nombre_tabla
        DROP COLUMN nombre_columna

//? Renombrar columna 
        ALTER TABLE nombre_tabla
        RENAME COLUMN nombre_viejo to nombre_nuevo
        

