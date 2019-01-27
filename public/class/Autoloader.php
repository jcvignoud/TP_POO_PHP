<?php
namespace jcvignoud\TP_POO_PremiersPas;
class Autoloader{
	/**
	 * [register description]
	 * @return [type] [description]
	 */
	static function register(){
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	/**
	 * [autoload description]
	 * @return [type] [description]
	 */
	static function autoload($class)
	{
		$class=str_replace(__NAMESPACE__ . '\\','', $class);
		$class=str_replace('\\','/',$class);
		require 'class' . $class_name . '.php';
	}
}