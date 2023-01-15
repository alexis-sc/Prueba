
## Acerca del proyecto

El proyecto tiene como propósito ver el funcionamiento de una API con operaciones CRUD, el proyecto contiene los siguientes endpoints:

- GET: /api/estudiante
- POST: /api/estudiante
- PUT: /api/estudiante/{id}
- DELETE: /api/estudiante/{id}

Defincion de las rutas.

```	
Route::apiResource('estudiante', estudiantesController::class);

```


## Clonar el proyecto

Para clonar el proyecto se tiene la opción de descargarlo como archivo zip o copiar la URL y descargarlo en el directorio que desee trabajar.

```	
git clone https://github.com/alexis-sc/Prueba.git

```
## Después de clonar el proyecto 
1.	Ya que el proyecto está en el directorio ingresamos a él desde alguna terminal y descargamos composer con el siguiente comando.
```	
composer install

```

2.	Generamos un archivo env nuevo.  
```	
cp .env.example .env

```

3.	Generamos una llave(key) nueva.
```	
php artisan key:generate

```
4.	Agregamos la información a las variables de base de datos del  archivo env. 
```	
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=tu_contraseña

```

5.	Se generan las migraciones.
```	
php artisan migrate

```
6. Por ultimo ejecutamos el proyecto.
```	
php artisan serve

```
