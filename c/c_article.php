<?php
include_once('c_base.php');

class C_Article extends C_Base
{
	public $id_article;
	
	function __construct()
	{
		
	}
	
	protected function OnInput()
	{
		parent::OnInput();
		$mArticles = new M_Articles();
		if (isset ($_GET['id']))
		{
			$this->id_article = $_GET['id'];
			$this->article = $mArticles->articles_get($this->id_article);
		}
		else
		{
			header('Location: index.php');
			die();
		}
	}
	
	protected function OnOutput()
	{
		$vars = array('id_article' => $this->id_article, 'article' => $this->article);
		$this->content = $this-> Template('v/v_article.php', $vars);
		parent::OnOutput();
	}
}




