Código Fuente de PHPCAT v0.0.1
=======
> Autor: Marcelo Muñoz Giacaman - Fibercat Networks Telecomunicaciones LTDA.
>
> Fecha: 15 Octubre 2018
>
> Formato: .md

Framework de PHP 7.2
* MultiUso: Podrá funcionar en diversos modo según la aplicación que desees.
* Open Source: Colabora y usalo como quieras.
* GUI Support: Permite que administres todo el servicio desde una interfaz gráfica.
* Mixto: Procedimental u Orientado a objetos.
* Curva de aprendizaje Rápida.

Directorios
======
PHPCAT está inspirado en Laravel. No pretende ser una copia de éste pero tampoco es necesario inventar la rueda.

La distribución de los directorios y archivos bases es así:

/install/ (directorio que contiene el instalador. Debe borrarse una vez que se instala el servicio)
/phpcatsrv/ (directorio que debe quedar fuera del área pública)
	/app/
		/{myapp}/
			/routes/
			/views/
	/kernel/
		/errors/
		/lang/
			/es/
			/en/
	/vendor/
		/mmunoz/
	+autoload.php
/public_html/ (directorio público)
	+.htaccess
	+index.php

Para crear una aplicación nueva:
1. Copie el index en la carpeta base public_html en el directorio de su aplicación.
2. Cree en el diretorio phpcatsrv/app, un nuevo directorio donde se creará su aplicación php.
