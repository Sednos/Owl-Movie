<?php

function secu_session_start()
{
		session_start();

$ip = !empty( $_SERVER['HTTP_X_FORWARDED_FOR'])? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$securite = $ip.'_'.$_SERVER['HTTP_USER_AGENT'];

if(empty($_SESSION))
{
	$_SESSION['securite'] = $securite;
	return true;
}
elseif($_SESSION['securite'] != $securite)
{
	session_regenerate_id();
	$_SESSION = array();
	return false;
}
return true;

echo "HTTP_X_FORWARD FOR ".$_SERVER['HTTP_X_FORWARD_FOR']."<br/>";
echo "REMOTE_ADDR = ".$_SERVER['REMOTE_ADDR']."<br/>";
echo "IP = ".$ip."<br/>";
echo "UA = ".$_SERVER['HTTP_USER_AGENT']."<br/>";	}