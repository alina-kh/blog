	<h1>Редактирование статьи "<?=$article['title']?>"</h1>
	<form method="post">
		Название:
		<br/>
		<input type="text" name="title" value="<?=$article['title']?>" />
		<br/>
		<br/>
		Содержание:
		<br/>
		<textarea name="content"><?=$article['content']?></textarea>
		<br/>
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="submit" name="edit" value="Сохранить" />
		<input type="submit" name="delete" value="Удалить" />
	</form>
