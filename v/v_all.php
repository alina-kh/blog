<ul>
		<? foreach ($articles as $article): ?>
			<li>
				<a href="index.php?c=c_article.php&id=<?= $article['id_article'] ?>"><?=$article['title']?></a>
				<br/>
				<p><?= articles_intro($article);?></p>
			</li>
		<? endforeach ?>
	</ul>