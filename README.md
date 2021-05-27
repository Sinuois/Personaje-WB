## Cómo correr el proyecto

Primero que todo, asegurarse de que el proyecto esté en la carpeta *xampp\htdocs*.

1. Abrir XAMPP y activar Apache y MySQL.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="img/xampp.jpg" width="400"></a></p>

2. Ingresar, a través del navegador, a *localhost/phpmyadmin*.

3. Una vez allí, seleccionar "Nueva", para crear una nueva base de datos.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="img/phpmyadmin1.jpg" width="400"></a></p>

4. Crear una base de datos de nombre "bdwb".

<p align="center"><a href="https://laravel.com" target="_blank"><img src="img/phpmyadmin2.jpg" width="400"></a></p>

5. Dentro del proyecto, ejecutar los siguientes comandos:
```
php artisan migrate
php artisan serve
```
6. Estos comandos crearán las tablas y ejecutarán el proyecto, respectivamente. Luego, éste estará disponible en el navegador mediante el enlace *localhost:8000*.
