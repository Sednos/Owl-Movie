<?php
define("_BASE_URL", "");
ini_set('display_errors', 1);
error_reporting(E_ALL);
//ini_set('display_errors', 0);
//error_reporting(0);
include_once('config/config.inc.php');
include_once('core/core.php');

if(!secu_session_start(SESSION_NAME))
{
	die("Problème technique");
}

include_once('modele/param.inc.php');
if(!isset($_GET['module']))
{
	$module = DEFAULT_MODULE;
}
else
{
	$module = $_GET['module'];
}

if(!isset($_GET['action']))
{
	$action = DEFAULT_ACTION;
}
else
{
	$action = $_GET['action'];
}

$_SESSION["module"]= $module;
$_SESSION["action"]= $action;

$url = 'controleur/' . $module. '/' .$action . '.php';
if(file_exists($url))
{
	include_once($url);
}

else
{
	include_once('vue/404.php');
}