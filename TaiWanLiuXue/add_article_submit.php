<?php
$input = $_POST;

$conf = parse_ini_file(__DIR__ . '/conf/db.ini');
$dsn = 'mysql:host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['dbname'] . ';charset=' . $conf['charset'];
$db = new PDO($dsn, $conf['username'], $conf['password']);
//连接数据库

$sql = 'INSERT INTO `article` (`Author`, `Title`, `Content`) VALUES (' . '\'' . $input['author'] . '\',\'' . $input['title'] . '\',\'' . $input['content'] . '\');';

$stmt = $db -> query($sql);
//执行SQL
$ID = $db -> lastInsertId();
//获得自增id

if (!empty($ID)) {
	$notice = '保存成功';
} else {
	$notice = '出错了';
}
$d = array();
$d['notice'] = array('msg' => $notice, );
require_once __DIR__ . '/res/layout/notice.html';
