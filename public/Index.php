<?php

use \jcvignoud\TP_POO_PremiersPas\Autoloader;

require '../app/Autoloader.php';

Autoloader::register();


if (isset($_GET['page']))
{
	$page=$_GET['page'];
}
else
{
	$page='News';
}

if('News'===$page)
{
	require '../pages/NewsView.php';
}
else
{
	if('Admin'===$page)
	{
		require '../pages/AdminView.php';
	}
	else
	{
		require '../pages/NewsView.php';
	}
}