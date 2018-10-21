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
#	ESSENTIALS FUNCTIONS
#
#	1.1 Url And Dir Constant Creator.
require_once BACK_PHPDIR . '/sys/ensambleMagicRoutes.php';
#	1.2 Make Routes Created at apps/{myappname}/routes
require_once BACK_PHPDIR . '/sys/createViews.php';
require_once BACK_PHPDIR . '/sys/createRoutes.php';
die(http_response_code(404));