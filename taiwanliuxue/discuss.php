<?php
$conf = parse_ini_file(__DIR__ . '/conf/db.ini');
$dsn = 'mysql:host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['dbname'] . ';charset=' . $conf['charset'];
$db = new PDO($dsn, $conf['username'], $conf['password']);

$sql = 'SELECT `ComentID`, `UserID`, `UserName`, `Content`, `Time` FROM `coment` LIMIT 10';

$stmt = $db -> query($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$coments = $stmt -> fetchAll();

$d = array();
$d['coments'] = $coments;
require_once __DIR__ . '/res/layout/discuss.html';
