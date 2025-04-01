## **Proyecto de Formulario para Registro de Alumno**
## 
Este proyecto es parte de un ejercicio escolar donde se implementan tecnologías web básicas como HTML, CSS y [PHP](https://www.php.net/manual/en/introduction.php) para el procesamiento de datos.
* * *
**Descripción**

El formulario permite al usuario ingresar sus datos personales y luego muestra esos datos en una página de confirmación (se visualizan los datos del alumno ingresados en el formulario).
* * *
**Tecnologías Usadas**

**HTML:** Lenguaje utilizado para estructurar el contenido de la página.

**CSS:** Utilizado para diseñar y hacer la página visualmente atractiva.

**PHP:** Lenguaje de programación del lado del servidor que procesa formularios y genera páginas de confirmación, integrado en HTML con la etiqueta <?php ?>.

* * *
**Estructura del proyecto**
```
XAMPP
└─── htdocs
	│ index.php
	| style_index.css
	| card.php
	| card.css
	| student.png
```
   

- **index.php**: El archivo principal que contiene el formulario de registro.
- **style_index.css**: permite generar el diseño visual del formulario de registro.
- **card.php**: procesa y muestra los datos del alumno.
- **card.css**: permite generar el diseño visual de la tarjeta con los datos del alumno.
- **student.png:** Imagen de perfil para el alumno registrado.

 *Nota: Por el momento, el formulario no cuenta con validaciones, por lo que no se verifica si los datos ingresados son correctos o están en el formato adecuado. Esto significa que es posible enviar el formulario con campos vacíos, invalidos o con información incorrecta.*
* * *
 **Prerequisitos**
- [XAMPP](https://www.apachefriends.org/index.html): instalar servidor local para ejecutar los archivos PHP correctamente.

**Correr Proyecto**

Para correr este proyecto en tu computadora, sigue estos pasos:

1. Clona este repositorio en tu máquina local.
2. Abre "Manage Servers" en XAMPP y prende:
   * MySQL DataBase
   * Apache Web Server
4. Accede al archivo index.html desde tu navegador a través de localhost.

![RegistroAlumno](https://github.com/user-attachments/assets/340b36c6-b290-4fe3-90f9-841fdce96020)




