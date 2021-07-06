## Acerca de Banco
Para ejecutar el proyecto debemos colocar las credenciales de la base de datos.

### 1. Copiar archivo .env.example a .env.

### 2. Cambiar DB_HOST por la ruta del servidor de base de datos.
```angular2html
DB_HOST=127.0.0.1
```
### 3. Cambiar DB_USERNAME por el usuario de la de base de datos.
```angular2html
DB_USERNAME=root
```
### 4. Cambiar DB_PASSWORD por la contraseña del usuario de la de base de datos.
```angular2html
DB_PASSWORD=root
```
### 5. Instalar dependencias de composer.
```angular2html
composer install
```
### 6. Instalar dependencias de npm.
```angular2html
npm install
```
### 7. Instalar dependencias de npm.
```angular2html
npm install
npm run dev
```
### 8. Ejecutar migraciones.
```angular2html
php artisan migrate
```
### 9. Ejecutar semillas.
añadir ``` use Illuminate\Support\Facades\DB; ``` en el archivo ubicado en database/seeders/DatabaseSeeder.php
y ejecutar el siguiente comando:
```angular2html
php artisan db:seed
```
### 10. Ejecutar servidor.
```angular2html
php artisan serve
```
### 11. Iniciciar sesión con el usuario de pruebas.
```angular2html
identificacion: 123456789
constraseña: 1151
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
