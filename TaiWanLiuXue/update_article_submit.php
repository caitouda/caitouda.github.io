<?php
$input = $_POST;

$conf = parse_ini_file(__DIR__ . '/conf/db.ini');
$dsn = 'mysql:host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['dbname'] . ';charset=' . $conf['charset'];
$db = new PDO($dsn, $conf['username'], $conf['password']);
//连接数据库

$sql = 'UPDATE `article` SET `Title` = \'' . $input['title'] . '\', `Content` = \'' . $input['content'] . '\' WHERE `Author` = \'' . $input['author'] . '\';';

$stmt = $db -> query($sql);
//执行SQL
$ID = $db -> lastInsertId();
//获得自增id
echo $ID;

if (!empty($ID)) {
	$notice = '修改成功';
} else {
	$notice = '出错了';
}
$d = array();
$d['notice'] = array('msg' => $notice, );
require_once __DIR__ . '/res/layout/notice.html';
