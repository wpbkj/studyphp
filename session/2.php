<?php
session_start();//开始session
?>
<html>
<head>
<meta charset="utf-8">
<title>跨页面检索session测试-WPBKJ博客</title>
</head>
<body>
<?php
if (isset($_SESSION["thing"]))//如果session被设置则返回session数值，否者输出else中的信息
{
echo $_SESSION["thing"];
}
else{
	echo "您还没有设置session哦，点击下面返回为session赋值吧";
}
?>
	<br>
	<a href="session.php">>返回赋值页面</a>
	<br>
	<a href="del.php">>删除此session</a>
</body>
</html>