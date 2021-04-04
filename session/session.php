<?php
session_start();//开始session
$_SESSION["thing"]=&$_POST["sessions"];//将POST中的变量赋值给SESSION变量：thing
?>
<html>
<head>
<meta charset="utf-8">
<title>SESSION存储测试-WPBKJ博客</title>
</head>

<body>
	<h3>本测试地址由WPBKJ博客原创，本测试介绍地址：<a href="https://www.wpbkj.com/archives/phpsession.html">https://www.wpbkj.com/archives/phpsession.html</a></h3>
<form method="post" action=""><!--设置POST-->
	<input type="text" name="sessions"/>
	<input type="submit" value="存储session"/>
	</form>
<?php
	if(isset($_SESSION["thing"]))
	{
	echo $_SESSION["thing"];
	}
	else
	{
		echo "您还未设置session,请在上面输入您想存储的session";
	}
?>
	<br>
您可在为SESSION赋值前进入以下页面，对比赋值后不同。<br>
	<a href="2.php">>跨页面检索session测试</a><br>
	<a href="del.php">>删除此session</a>
</body>
</html>
