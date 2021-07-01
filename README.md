## Acerca de Banco
Para ejecutar el proyecto debemos colocar las credenciales de la base de datos.

###1. Copiar archivo .env.example a .env.

###2. Cambiar DB_HOST por la ruta del servidor de base de datos.
```angular2html
DB_HOST=127.0.0.1
```
###3. Cambiar DB_USERNAME por el usuario de la de base de datos.
```angular2html
DB_USERNAME=root
```
###3. Cambiar DB_PASSWORD por la contraseña del usuario de la de base de datos.
```angular2html
DB_PASSWORD=root
```
###4. Instalar dependencias de composer.
```angular2html
composer install
```
###5. Instalar dependencias de npm.
```angular2html
npm install
```
###5. Instalar dependencias de npm.
```angular2html
npm install
npm run dev
```
###6. Ejecutar migraciones.
```angular2html
php artisan migrate
```
###7. Ejecutar semillas.
```angular2html
php artisan db:seed
```
###7. Ejecutar servidor.
```angular2html
php artisan serve
```
###7. Iniciciar sesión con el usuario de pruebas.
```angular2html
identificacion: 123456789
constraseña: 1151
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
