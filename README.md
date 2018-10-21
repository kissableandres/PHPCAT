Código Fuente de PHPCAT v0.0.1
=======
> Autor: Marcelo Muñoz Giacaman - Fibercat Networks Telecomunicaciones LTDA.
>
> Fecha: 15 Octubre 2018
>
> Formato: .md

Micro Framework-CMS de PHP 7.2

* Multi Categorias de CMS: Podrá funcionar como web personalizada(framework) o modo CMS.
* GUI Support: Permitirá que administres todo el servicio desde una interfaz gráfica (Opcional).
* Open Source: Colabora y usalo en tus proyectos express.
* Código Mixto: Procedimental u Orientado a objetos.
* Curva de aprendizaje: Rápida.

Instalacion
======
Para crear una aplicación nueva:
1. Copie el index en la carpeta base public_html en el directorio de su aplicación.
2. Configure reemplazando /myapp por el nombre de su app
const APPDIR = '/myapp';
require('/home/{myuserdir}/phpcatsrv/apps' . APPDIR . '/config.php');
require('/home/{myuserdir}/phpcatsrv/autoload.php');

2. Cree en el directorio phpcatsrv/app, un nuevo directorio donde se creará su aplicación php.
3. Copie los archivos del directorio myapp en su directorio de aplicación.
4. Configure en config.php {myuserdir} y {mydomain} por el directorio y su dominio sin http respectivamente
const BACK_PHPDIR = '/home/{myuserdir}/phpcatsrv';
const FRONT_DOMAIN = '/{mydomain}' . APPDIR;

Novedades de la Versión Inicial 0.0.1
======
Para obtener las novedades de la versión dirígase al archivo de la versi+on correspondiente.
