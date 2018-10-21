<?php
###########################################################################
#	AUTHOR	: Marcelo Muñoz Giacaman
###########################################################################

#--------------------------------------------------------------------------
#	Mandatary! Put in every page for secure reasons.
#--------------------------------------------------------------------------
if (!defined('phpCat'))
	error_log('Esto es un intento de hackeo').die('ERROR FBX1450');
#--------------------------------------------------------------------------
function View(
	$tplName	# .../views/{tplName}.phpcat.php
)
{
	$file = BACK_APPDIR . '/views/' . $tplName . '.phpcat.php';
	$html = file_exists($file) ? file_get_contents($file) : http_response_code(404);
	echo $html;
}