<?php namespace Buchin\Scriptholder;

/**
* Package
*/
class Scriptholder
{
	public static function place($name)
	{
		$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'scripts' . DIRECTORY_SEPARATOR . $name . '.html';
		
		if(!file_exists($path)){
			return '';
		}

		return file_get_contents($path);
	}
}