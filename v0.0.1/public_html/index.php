<?php
###########################################################################
#	AUTHOR	: Marcelo Muñoz Giacaman
###########################################################################

#--------------------------------------------------------------------------
#	Mandatary! Put in every page for secure reasons.
#--------------------------------------------------------------------------
define('phpCat',1);
#··········································································
//	Configure correctamente las rutas {full_base_directory} y {appname}
const APPDIR = '/myapp';
require('/home/{myuserdir}/phpcatsrv/apps' . APPDIR . '/config.php');
require('/home/{myuserdir}/phpcatsrv/autoload.php');