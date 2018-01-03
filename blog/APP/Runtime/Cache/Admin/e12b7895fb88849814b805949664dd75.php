<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>	
		<link rel="stylesheet" href="__INDEX__/assets/css/core.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/menu.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/amazeui.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/component.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/page/form.css" />
	</head>
	<body>
		<div class="account-pages">
			<div class="wrapper-page">
				<div class="text-center">
	                <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
	            </div>
	            
	            <div class="m-t-40 card-box">
	            	<div class="text-center">
	                    <h4 class="text-uppercase font-bold m-b-0">登 录</h4>
	                </div>
	                <div class="panel-body">
	                	<form class="am-form" id="Login" name="Login" method="post" action="<?php echo U(GROUP_NAME.'/Login/login');?>">
	                		<div class="am-g">
	                			<div class="am-form-group">
							      <input type="text" class="am-radius" name="username" placeholder="用户名">
							    </div>
							
							    <div class="am-form-group form-horizontal m-t-20">
							      <input type="password" class="am-radius" name="password"  placeholder="密码">
							    </div>
							    
							   
		                        
		                        <div class="am-form-group ">
		                        	<button type="submit" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">登 录</button>
		                        </div>
		                        
		                      <!--   <div class="am-form-group ">
		                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
		                        </div> -->
	                		</div>

	                	</form>
							
	                </div>
	            </div>
			</div>
		</div>
	</body>
</html>