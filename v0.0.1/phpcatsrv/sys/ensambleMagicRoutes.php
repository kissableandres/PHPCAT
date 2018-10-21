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
#	URL CREATION (Frontend Use)
#--------------------------------------------------------------------------
# 1.1 Full Url with SSL support
const FRONT_URL = 'http' . (SSL_ENABLED ? 's' : '') . '/' . FRONT_DOMAIN;
# 1.2 Img Url
const FRONT_IMG = FRONT_URL . IMG;
# 1.3 Js Url
const FRONT_JS = FRONT_URL . JS;
# 1.4 Css Url
const FRONT_CSS = FRONT_URL . CSS;
#--------------------------------------------------------------------------
#	DIR CREATION
#--------------------------------------------------------------------------
const BACK_APPDIR = BACK_PHPDIR . '/apps' . APPDIR;