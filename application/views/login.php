<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>人事管理系统 | 登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]>
    <script src="<?php echo base_url()?>/Public/js/flot/excanvas.min.js"></script>-->
<!--    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<!--    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Public/css/cloud-admin.css" >
	
	<link href="<?php echo base_url()?>Public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Public/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Public/js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Public/css/animatecss/animate.min.css" />
	<!-- FONTS -->
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">登录</h2>
								<div class="divide-40"></div>
								<form role="form" method="post" action="<?php echo site_url()?>/index/login" onsubmit="return check()">
								  <div class="form-group">
									<label for="username">用户名</label>
									<i class="fa fa-envelope"></i>
									<input type="text" class="form-control" id="username" name="username">
								  </div>
								  <div class="form-group"> 
									<label for="password">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="password" name="password" >
								  </div>
								  <div class="form-group">
									<button type="submit" class="btn btn-danger" id="submit">提交</button>
								  </div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->

	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?php echo base_url()?>Public/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo base_url()?>Public/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo base_url()?>Public/bootstrap-dist/js/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="<?php echo base_url()?>Public/js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
    <script>
        function check(){
            if ($("#username").val()==='' ) {
                alert("用户名不能为空");
                return false
            } else if($("#password").val()==='') {
                alert("用户名不能为空");
                return false
            } return true
        }
    </script>
	<script src="<?php echo base_url()?>Public/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>