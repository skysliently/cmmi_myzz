<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>添加属性</title>
		
		<style type="text/css">
			.form-control{width:25xp;}
		</style>

		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		
		<link rel="stylesheet" href="__PUBLIC__/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/bootstrap-3.3.7-dist/js/bootstrap.min.js" />

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="__INDEX__/assets/css/amazeui.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/core.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/menu.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/index.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/admin.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/page/typography.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/page/form.css" />
		<link rel="stylesheet" href="__INDEX__/assets/css/component.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
             <span class="logo">AdminList</span><i class="zmdi zmdi-layers"></i>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">添加属性</h4></li>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right">
					<li class="inform"><a class="btn btn-default" href="<?php echo U(GROUP_NAME.'/Index/logout');?>" role="button" aria-hidden="true" target="_self">登出</a ><!-- <i class="btn btn-default" href="#asdas" aria-hidden="true">登出</i> --></li>
					<li class="hidden-xs am-hide-sm-only">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><img src="__INDEX__/assets/img/search.png"></a>
                        </form>
                    </li>
				</ul>
			</div>
		</header>
		<!-- end page -->
		
		
	<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				  <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">
				    	<!-- User -->
						<div class="user-box am-hide-sm-only">
	                        <div class="user-img">
	                            <img src="__INDEX__/assets/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
	                        </div>
	                        <h5><a href="#">Mat Helme</a> </h5>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	
	                            <li>
	                                <a href="#" class="text-custom">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                    <!-- End User -->
	            
						<ul class="am-list admin-sidebar-list">
						    <li><a href=""><span class="am-icon-home"></span> 首页</a></li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-table"></span> 订单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/blog_admin');?>" class="am-cf">添加订单</span></a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/index_admin');?>">订单列表</a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/trach_admin');?>" class="am-cf">回收站</span></a></li>
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><i class="am-icon-line-chart" aria-hidden="true"></i> 属性管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav2">
						        <li><a href="<?php echo U(GROUP_NAME . '/Attribute/index');?>" class="am-cf"> 属性列表</span></a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Attribute/addAttr');?>" class="am-cf"> 添加属性</span></a></li>
						        
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav4'}"><span class="am-icon-check"></span> 顾客管理
                               <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav4">
						        <li><a href="<?php echo U(GROUP_NAME . '/Visitor/addVisitor');?>" class="am-cf"> 添加顾客</a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Visitor/index_admin');?>">顾客列表</a></li>   
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 业务管理
                               <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
						        <li><a href="<?php echo U(GROUP_NAME . '/Category/addCate');?>" class="am-cf"> 添加业务</a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Category/index');?>">业务列表</a></li>   
						      </ul>
						    </li>
						    <li><a href="<?php echo U(GROUP_NAME . '/Add/index');?>"><span class="am-icon-puzzle-piece"></span> 金额查询</a></li>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->
		
		
		
	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
	    <div class="content">
			 
		<form action="<?php echo U(GROUP_NAME . '/Attribute/runAddAttr');?>" method='post'>
			<table class='table'>
				<tr>
					<th colspan="2">添加博文属性:</th>
				</tr>
				<tr>
					<td align="right">属性名称：</td>
					<td>
						<input class="form-control" type="text" name="name">
					</td>
				</tr>
				<tr>
					<td align="right">标题颜色：</td>
					<td>
						<input class="form-control" type="text" name="color">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input class="btn btn-info" type="submit" value="保存添加">
					</td>
				</tr>
			</table>
		</form>

		  <!-- Row start --><!-- Row end --></div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="__INDEX__/assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="__INDEX__/assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="__INDEX__/assets/js/app.js" ></script>
		<script type="text/javascript" src="__INDEX__/assets/js/blockUI.js" ></script>
		<script type="text/javascript" src="__INDEX__/assets/js/charts/echarts.min.js" ></script>
		<script type="text/javascript" src="__INDEX__/assets/js/charts/indexChart.js" ></script>
		<script type="text/javascript" src="__PUBLIC__/jquery-3.2.1.min.js" ></script>

	</body>
	
</html>