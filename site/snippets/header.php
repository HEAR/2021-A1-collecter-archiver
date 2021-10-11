<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<title><?= $site->title() ?></title>

	<?= css([
		'assets/css/style.css?v=0.1'
	]) ?>
	<?= js([
		'assets/js/jquery-3.6.0.min.js',
		'assets/js/script.js?v=0.1',
	]) ?>

	<link rel="stylesheet" href="" id="optional-style">

</head>
<body>

<main>

<h1>
	<a href="<?= $site->url() ?>"><?= $site->title() ?></a>
</h1>

<select id="style">
	<option value="none">Style : aucun</option>
<?php 
$styles = $site->styles()->toStructure();
foreach ($styles as $style): ?>
	<option value="<?= $style->css()->toFiles()->first()->url() ?>">Style : <?= $style->name()->text() ?></option>
<?php endforeach ?>
</select>


<!-- snippet/treemenu -->
<?php snippet("treemenu") ?>
<!-- end snippet/treemenu -->

<!-- end snippet/header.php -->