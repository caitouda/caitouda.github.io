<?php
$input = $_POST;

$conf = parse_ini_file(__DIR__ . '/conf/db.ini');
$dsn = 'mysql:host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['dbname'] . ';charset=' . $conf['charset'];
$db = new PDO($dsn, $conf['username'], $conf['password']);
//连接数据库

$sql = 'INSERT INTO `coment` (`UserID`, `UserName`, `Content`) VALUES (' . '\'' . $input['userid'] . '\',\'' . $input['username'] . '\',\'' . $input['content'] . '\');';

$stmt = $db -> query($sql);
//执行SQL
$ComentID = $db -> lastInsertId();
//获得自增id

if (!empty($ComentID)) {
	$notice = '保存成功';
} else {
	$notice = '出错了';
}
$d = array();
$d['notice'] = array('msg' => $notice, );
$url = "/discuss.php";  
echo "<script type='text/javascript'>";  
echo "window.location.href='$url'";  
echo "</script>";  
