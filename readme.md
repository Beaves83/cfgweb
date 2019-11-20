## Tabla de Contenidos :card_index:

* [Descripción del proyecto](#web-Revista-de-videojuegos-(GamesWeb))
* [Construido con](#construido-con)
* [Instalación](#instalacion)
* [Autor](#autor)
* [Versión](#version)

# Web Revista de videojuegos (GamesWeb) :video_game:

_Estamos antes una web para mostrar el contenido de una revista de videojuegos._

Cuenta con diferentes pestañas donde ver un listado de los **análisis**, **reviews**, **reportajes**,... y dos columnas laterales donde encontramos información relativa a la empresa y además información destacada como puede ser el **último número publicado** de esta, el **análisis más leido**, el **preview más leido** o las **noticias destacadas**.

El sitema cuenta con tres perfiles disponibles, con los cuales accederemos a distintas opciones que nos ofrede el GRM. Los tres roles
que tenemos serán **Usuario**, **Gestor** y **Administrador**.  

**Usuario** - Tendrá acceso a todos los listados. 

**Gestor** - Tendrá acceso a todos los listados. Podrá gestionar el contenido como la creación de nuevos post, la modificación de entradas, o la eliminación de contenido. 

**Administrador** - Dispondrá del mismo acceso que el Gestor pero además cuenta con la posibilidad de gestionar usuarios (CRUD).


## Construido con 🛠️

_El proyecto ha sido creado con:_

* [PHP](https://www.php.net/) - PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.
* [Laravel](https://laravel.com/) - Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7.
* [Laravel-Blade](https://laravel.com/docs/5.8/blade) - Blade es el motor de plantillas simple pero potente provisto con Laravel.
* [Laravel-Eloquent](https://laravel.com/docs/5.8/eloquent) - El ORM Eloquent incluido con Laravel proporciona una implementación de ActiveRecord hermosa y simple para trabajar con su base de datos.

## Instalación :floppy_disk:

_Para ejecutar el proyecto necesitas seguir los siguientes pasos:_

Abrimos la línea de comandos y llegamos a la ruta donde vamos a clonar la aplicación.
```
$ cd ../mvc-laravel
$ git clone https://github.com/Beaves83/cfgweb.git
$ composer install
```
Crear una base de datos llamada cfgweb2019. Modificamos el fichero .env para añadir el nombre de la base de datos, nombre de usuario y contraseña. Volvemos a la línea de comandos.
```
$ php artisan migrate --seed
```
Este último paso tardará unos minutos porque vamos a generar datos de prueba.

_NOTA: Si ya he descargado el proyecto anteriormente, tendría que refactorizar todo y hacer una nueva población de la BBDD para que todo nos funcione bien con el siguiente comando:_
```
php artisan migrate:refresh --seed
```
Por defecto se crearán tres usuarios con los cuales podemos realizar las pruebas, un usuario para cada rol distintos.

**Usuario:** admin@email.es  
**Contraseña:** admin@email.es  
**Rol:** Administrador  

**Usuario:** usuario@email.es  
**Contraseña:** usuario@email.es  
**Rol:** User  

**Usuario:** gestor@email.es  
**Contraseña:** gestor@email.es  
**Rol:** Gestor  


## Autor :man:

* **Bibiano Ruiz** - *Creador del proyecto.* - [beaves83](https://github.com/Beaves83/)

## Versión 0.2 :computer:

_El proyecto no está completo, aun no tengo terminada la primera versión._
