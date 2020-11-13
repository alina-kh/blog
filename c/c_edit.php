<?php
include_once('c_base.php');

class C_Edit extends C_Base
{

	private $article;
	private $id_article;
	public $title;
	public $content;
	
	function __construct()
	{
		$this->article = array();
		
	}
	
	protected function OnInput()
	{
		parent::OnInput();
		$mArticles = new M_Articles();
		if ($this->IsPOst())
		{
			if(isset($_POST['delete']))
			{
				if ($mArticles->articles_delete($_GET['id']))
				{
					header('Location: index.php?c=c_editor');
					die();
				}
			}
			
			$this->article['title'] = $_POST['title'];
			$this->article['content'] = $_POST['content'];
			
			if (isset($_POST['edit']))
			{
				if ($mArticles->articles_edit($_GET['id'], $_POST['title'], $_POST['content']))
				{
					header('Location: index.php?c=c_editor ');
					die();
				}
			}
		}
		else
		{
			$this->article = $mArticles->articles_get($_GET['id']);

		}
		$this->title .= '::Редактирование статьи::' . $this->article['title'];
	}
	
	protected function OnOutput()
	{
		$vars = array('article' => $this->article);
		$this->content = $this-> Template('v/v_edit.php', $vars);
		parent::OnOutput();
	}
}
