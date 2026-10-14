# SAES

Proyecto escolar de gestión académica desarrollado con PHP y CodeIgniter 3, usando MySQL/MariaDB.

## Requisitos

- XAMPP con Apache, PHP y MySQL/MariaDB.
- El proyecto dentro de `htdocs`.
- Una base de datos local llamada `saes`, con las tablas requeridas por el proyecto.

## Configurar la base de datos

1. Inicia Apache y MySQL desde el panel de XAMPP.
2. Abre `http://localhost/phpmyadmin/`.
3. Crea una base de datos llamada `saes` si todavía no existe.
4. Importa el respaldo SQL de SAES desde phpMyAdmin: selecciona la base de datos, entra en **Importar**, elige el archivo `.sql` y ejecútalo.
5. Revisa `application/config/database.php`. Por defecto usa `localhost`, usuario `root`, contraseña vacía y base `saes`, valores comunes en una instalación local de XAMPP. Si tu instalación usa otras credenciales, configúralas en ese archivo o define las variables de entorno `SAES_DB_HOST`, `SAES_DB_USER`, `SAES_DB_PASSWORD` y `SAES_DB_NAME`.

> El repositorio contiene el código PHP, pero una base de datos local no se sincroniza automáticamente con GitHub. Si aún no existe un respaldo `.sql` en el repositorio, expórtalo desde la computadora que tenga las tablas correctas: en phpMyAdmin selecciona `saes` → **Exportar** → método **Rápido** → formato **SQL**. Antes de compartir el respaldo, revisa que no contenga datos personales reales.

## Ejecutar SAES

Coloca la carpeta del proyecto dentro de `htdocs` e inicia Apache y MySQL. Si la carpeta se llama `saes`, abre:

`http://localhost/saes/index.php/`

Si cambias el nombre de la carpeta, sustituye `saes` en la URL por el nombre que uses.

## Nota sobre credenciales

No publiques contraseñas reales ni credenciales de producción en GitHub. Cada integrante debe usar las credenciales locales de su propio MySQL.
