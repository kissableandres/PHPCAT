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
#	DEFAULT DIRECTORY (write: /dirname format)
#--------------------------------------------------------------------------
const IMG = '/img';
const CSS = '/css';
const JS = '/js';
const BACK_PHPDIR = '/home/{myuserdir}/phpcatsrv';
const FRONT_DOMAIN = '/{mydomain}' . APPDIR;
#--------------------------------------------------------------------------
#	BASIC CONFIGURATION
#--------------------------------------------------------------------------
const SSL_ENABLED = true;
const SHOW_ERROR = true;
#--------------------------------------------------------------------------
#	DATABASE_CONNECT (MySql) Multiple Db Support (in future versions use)
#--------------------------------------------------------------------------
const DB = [
		'MYCONNAME' => [
			'MYSQL_HOST' => '',
			'MYSQL_USER' => '',
			'MYSQL_PASSWD' => '',
			'MYSQL_DATABASE' => ''
		]
	];
#--------------------------------------------------------------------------
#	MAIL CONNECT Multiple Mails Support (in future versions use)
#--------------------------------------------------------------------------
const MAIL = [
		'MYMAILSERVER01' => [
			'MAIL_SMTP' => '',
			'MAIL_USER' => '',
			'MAIL_USERNAME' => '',
			'MAIL_PASSWD' => ''
		]
	];