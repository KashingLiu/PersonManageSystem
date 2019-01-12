<?php
session_start();
require_once 'sqlhelper.class.php';
if(!empty($_GET['flag'])&&$_GET['flag']='signout')
{
	session_destroy();
	unset($_SESSION);
	echo "<script>alert('您已安全退出本系统！');</script>";
}

if(isset($_POST['username']) && isset($_POST['password'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	if($id=checkadmin($username, $password))
	{
		session_start();
		$_SESSION['id']=$id;
		if($id=="00000000000")
		    header("location:Administrator.php");
		else
            header("location:User.php");
		exit();
	}
}
function checkadmin($username,$password)
{
	global $sqlhelper;
	$sql="select * from user where username='$username' ";
	$res=$sqlhelper->execute_dql($sql);
	if($row=mysqli_fetch_assoc($res))
	{
		if($row['password']==$password)
		{
			$id=$row['id'];
			return $id;
		}
		else
		{
			echo "<script>alert('密码输入错误！！！');</script>";
		}
	}
	mysqli_free_result($res);
	return false;
}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>人事档案管理系统</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css?v=4.1.0" rel="stylesheet">
<!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
<script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body class="gray-bg">
<div class="middle-box text-center loginscreen  animated fadeInDown">
<div>
<div>
    <h2>欢迎使用</h2>
<h1 class="logo-name">HR</h1>
</div>
    <h2>人事档案管理系统</h2>
<form class="m-t" role="form" method="post" action="index.php">
<div class="form-group"><input type="username" name="username"
	class="form-control" placeholder="用户名" required="" value="<?php echo @$_POST['username'] ?>"></div>
<div class="form-group"><input type="password" name="password"
	class="form-control" placeholder="密码" required=""></div>
<button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
</form>
</div>
</div>
<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
</body>
</html>
