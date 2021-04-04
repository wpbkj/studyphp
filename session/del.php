<?php
session_start();//开始session
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除session测试-WPBKJ博客</title>
</head>

<body>
<?php
if (isset($_SESSION["thing"]))//如果session被设置就删除它，如果没有返回else中的信息
{
	unset($_SESSION["thing"]);
	echo "session删除成功";
}
else
{
	echo "您还没有设置session";
}
?><br>
	删除session之后点一下下面的“>跨页面检索session测试页面”，看出现了什么变化？
<br>
	<a href="session.php">>返回赋值页面</a>
	<br>
	<a href="2.php">>跨页面检索session测试页面</a>
</body>
</html>