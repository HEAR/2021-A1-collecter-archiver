<?php snippet('header') ?>

<!-- templates/keyword.php -->

<!-- https://getkirby.com/docs/cookbook/content/search -->

<h1><?= $page->title() ?></h1>

<?php

$pageText = array(); 
$searchTerm = (string)$page->keyword();

foreach ($results as $result): 
	$text = $result->text();
	$textArr = explode("\n", $text);

	foreach($textArr as $paragraph) :
		$pos = strpos($paragraph, $searchTerm );
		if( $pos === false ){
			// nothing
		}else{	
			$pageText[] = $paragraph;
		}
	endforeach;
endforeach;

?>

<section>
	<?= kirbytext( implode("\n", $pageText) ); ?>
</section>


<!-- end templates/keyword.php -->

<?php snippet('footer') ?>