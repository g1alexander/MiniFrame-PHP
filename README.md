# Mini-Frame-PHP | version 1.0

<img src="./src/frontend/assets/logo.png" alt="logo-php"/>

## Sobre Mini-Frame-PHP

> **Nota:** En este repositorio podras encontrar un mini framework - modelo, vista, controlador (MVC) creado en php nativo

---

## Instalacion

1. Una vez descargado el proyecto lo primero es cambiar el nombre de la carpeta.
2. En el archivo [parameters.php][parameters] modificaremos el "Mini-Frame-PHP" de la constante "\_url" (`define("_url", "http://localhost/MiniFrame-PHP/");`) **Nota:** debe ser el mismo con el que nombrará la carpeta del proyecto.
3. En el archivo [.htaccess][htaccess] haremos el mismo proceso que en el punto 2 (`ErrorDocument 404 http://localhost/MiniFrame-PHP/404/`).
4. La ultima configuracion es para la conexion a la base de datos MySQL, en el archivo [config_db.php][config_db] modificaremos nuestro host, usuario, contraseña y nombre de nuestra base de datos como en base a su configuracion personal (`define('HOST', 'localhost'); define('USER', 'root'); define('PASSWORD', 'admin'); define('DB', '');`).

---

## Implementaciones

[Bootstrap 5][bootstrap], [Sweetalert][sweetalert], [Fontawesome][fontawesome], [DataTables][datatables]

---

### Documentacion

Este proyecto fue basado de este [articulo][blog_victor] y se le agregaron nuevas funcionalidades.

<!-- links -->

[blog_victor]: https://victorroblesweb.es/2013/11/18/tutorial-mvc-en-php-nativo/
[parameters]: https://github.com/g1alexander/MiniFrame-PHP/blob/main/src/backend/config/parameters.php
[htaccess]: https://github.com/g1alexander/MiniFrame-PHP/blob/main/.htaccess
[config_db]: https://github.com/g1alexander/MiniFrame-PHP/blob/main/src/backend/config/config_db.php
[datatables]: https://datatables.net/examples/styling/bootstrap5.html
[fontawesome]: https://fontawesome.com/
[sweetalert]: https://sweetalert.js.org/guides/
[bootstrap]: https://getbootstrap.com/docs/5.0/getting-started/introduction/
