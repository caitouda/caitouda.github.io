<?php
$input = $_GET;
$ID = $input['ID'];
$file = './article.json';
if (file_exists($file)) {
	$tmp = file_get_contents($file);
	if (!empty($tmp)) {
		$articles = json_decode($tmp, true);
		$article = $articles[$ID - 1];
	}
}

$d = array();
$d['article'] = $article;
require_once __DIR__ . '/res/layout/get_article.html';