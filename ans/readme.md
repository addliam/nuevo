patrones de diseño
mejores prácticas
polimorfismo
abstracción

Clase PDO
getAvaiableDrivers()
spl_autoload_register()

1. <!DOCTYPE html>= Se declara la utilización del código HTML.
2. <html> = código html.
3. <head> = Define la sección de encabezado del documento HTML.
4. <meta charset="UTF-8">  =UTF-8 Es una codificación utilizada que admite varios idiomas y caracteres especiales.
5. <title>personas</title> = Es el título personas.
6. </head> = Cierra sección de encabezado.
7. <body> = Cuerpo de la sección.
8. <?php = Se declara la utilización del código php.
9. //Conexion a la base de datos = Conecta a la base de datos.
10. $servername = Declara las variables para la conexión a la base de datos.
11. $username = Solicita conecta el usuario.
12. $password = Solicita conecta la contraseña.
13. $database = Declara la base de datos alumnos.
14. $conn = Crea una nueva conexión a la base de datos.
15. //Verificar la conexión = verifica si existe conexión con la base de datos.
16. if($sconn-> = Crea una condición cuando si la conexión devuelve un error.
17. die("error al conectar a la base de datos" = Muestra un mensaje en tu pagina y muestra el código de error de la conexión en caso haya hubiese problemas de conexión.
18. //obtener los datos = obtiene los datos y los ordena.
19. $sql= Luego de una conexión exitosa se solicitan los datos de personas y los ordena por estado civil y empleo.
20. $result= Muestra el resultado del comando en la página.
