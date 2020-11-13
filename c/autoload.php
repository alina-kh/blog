<?php

spl_autoload_register(function ($class) 
{
    $type = explode('_', $class);
	switch($type[0])
	{
		case 'C':
			require_once('c/' . $class. '.php');
			break;
		/*case 'M':
			require_once('m/' . $class . '.php');
			break;*/
	}		
});
/* function __autoload($cls)
{
	$type = explode('_', $cls);
	switch($type[0])
	{
		case 'C':
			require_once('c/' . $cls. '.php');
			break;
		case 'M':
			require_once('m/' . $cls . '.php');
			break;
	}		
}*/