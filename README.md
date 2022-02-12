## Despliegue del proyecto modo local 
 
##### Programas requeridos
* Visual Studio: https://visualstudio.microsoft.com/es/downloads/
* Visual Studio Code: https://code.visualstudio.com/download
* Composer: https://getcomposer.org/download/
* Node: https://nodejs.org/en/blog/release/v12.18.4/
* Git: https://git-scm.com/
 
 
##### Paso 1
Clonamos el proyecto y instalamos las librerías de composer y node:
Abrimos nueva terminal en la raíz del proyecto y ejecutamos los siguientes comandos:
* composer install
* npm install
* npm run dev
 
Dentro de la carpeta public del proyecto crearemos nueva carpeta llamada "sounds"
##### Paso 2
Creamos nueva base de datos en nuestro gestor y la llamamos "melodycloud"
Importamos dentro de nuestra base de datos el archivo .sql este archivo se encuentra dentro de la ruta "/database/melodycloud.sql" de la raiz del proyecto.
 
##### Paso 3
Abrimos la aplicación C# con Visual Studio:
La aplicación se encuentra en la siguente ruta: "/netFramework/MelodyCloud.sln" de la raíz del proyecto.
Nos dirigimos a la clase "manager/Converter.cs". Dentro de la variable estática "respository"
colocaremos la ruta local de nuestra carpeta "sounds" que hemos creado en el Paso 1
 
##### Paso 4
Primero ejecutaremos la aplicación de C# depurando el programa
Una vez depurado el programa ejecutaremos el servidor de laravel con el comando:
"php artisan serve"
Ahora abriremos nueva terminar y iniciaremos el Node con el siguiente comando:
"node server.js"
 
Entramos a la web: http://127.0.0.1:8000/
 


