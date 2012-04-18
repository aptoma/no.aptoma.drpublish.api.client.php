<h2>Search articles [DrPublishApiWebClient::searchArticle('<?=$query?>', <?=$limit?>, <?=$offset?>)]</h2>
<ul>
<?php
	foreach ($drpublishApiClientArticles as $drpublishApiClientArticle) {
		?>
		<li>
				[<?=$drpublishApiClientArticle->getId()?>]
				<strong><?=$drpublishApiClientArticle->getTitle()?></strong>
                <br/>

            <span style="color: #555">

                published: <?=$drpublishApiClientArticle->getPublished() ?> | written by: <?=$drpublishApiClientArticle->getDPAuthors(true) ?> |
                categories: <?=$drpublishApiClientArticle->getDPCategories() ?> |
                tags:  <?=$drpublishApiClientArticle->getDPTags() ?>
                <br/>
               <?=$drpublishApiClientArticle->getPreamble()?>
                </span>


		</li>
		<?php
	}
?>
</ul>