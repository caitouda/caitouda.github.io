<?php
$input = $_GET;
$d = array();
if (!isset($input['ID']) || empty($input['ID'])) {
	$d['notice'] = array('msg' => '出错了：缺少参数', );
	require __DIR__ . '/res/layout/notice.html';
	exit ;
}
$conf = parse_ini_file(__DIR__ . '/conf/db.ini');
$dsn = 'mysql:host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['dbname'] . ';charset=' . $conf['charset'];
$db = new PDO($dsn, $conf['username'], $conf['password']);
$sql = 'SELECT `UserID`, `UserName`, `Content`, `Time` FROM `coment` WHERE ComentID=' . $input['ID'] . ' LIMIT 1';
$stmt = $db -> query($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$r = $stmt -> fetchAll();
if (empty($r)) {
	$d['notice'] = array('msg' => '出错了：没有此留言', );
	require __DIR__ . '/res/layout/notice.html';
	exit ;
}
$d = array();
$d['coment'] = $r[0];
require_once __DIR__ . '/res/layout/get_coment.html';
