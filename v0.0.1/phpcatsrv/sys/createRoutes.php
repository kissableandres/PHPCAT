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
function Route(
	$method,				# Get, Post
	$route_url,				# /asdasdasd
	$anonymous_function 	# function (){}
)
{
	#	get
	if(($route_url == str_replace(APPDIR,'',$_SERVER['REQUEST_URI']))&&($method=='Get'))
	{
		if(empty($_POST))
			$anonymous_function().die;
	}
	#	post
	elseif(($route_url == str_replace(APPDIR,'',$_SERVER['REQUEST_URI']))&&($method=='Post'))
	{
		if(!empty($_POST))
			$anonymous_function().die;
	}
}
#--------------------------------------------------------------------------
foreach (glob(BACK_APPDIR . '/routes/*.php') as $filename)
    require_once $filename;
