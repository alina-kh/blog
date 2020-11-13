<?php
// Короткое описание статьи
	function articles_intro($article)
	{
		if(strlen($article['content']) > 160)
			return substr($article['content'], 0, 160);
		else
			return $article['content'];
	}
	
	function view($fileName, $vars = array())
		{
			// Установка переменных для шаблона.
			foreach ($vars as $k => $v)
			{
				$$k = $v;
			}

			// Генерация HTML в строку.
			ob_start();
			include $fileName;
			return ob_get_clean();	
		}	