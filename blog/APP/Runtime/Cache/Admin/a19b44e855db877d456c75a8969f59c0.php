<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博文列表</title>
		
		<script type="text/javascript">
			window.UEDITOR_HOME_URL = "__ROOT__/Data/Ueditor/";
			// window.UEDITOR_HOME_URL = 'http://localhost:3306/__ROOT__/Data/utf8-php/';
			window.onload = function(){
				window.UEDITOR_CONFIG.initialFrameHeight = 400;
				window.UEDITOR_CONFIG.imageUrl = "<?php echo U(GROUP_NAME . '/Blog/upload');?>";
				// window.UEDITOR_CONFIG.catchRemoteImageEnable: true;
				UE.getEditor('content');
			
			}
		</script>
		<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
		


	

		
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

					<li><h4 class="page-title">博文列表</h4></li>
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
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/blog_assis');?>" class="am-cf">订单博文</span></a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/index_assis');?>">订单列表</a></li>
						        <li><a href="<?php echo U(GROUP_NAME . '/Blog/trach_assis');?>" class="am-cf">回收站</span></a></li>
						      </ul>
						    </li>
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
			 
		<form action="<?php echo U(GROUP_NAME . '/Blog/addBlog_assis');?>" method="post">
			<table class='table table-striped'>
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>所属分类</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr>

				<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
						<td><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["title"]); ?>  <?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><!-- <span>color:<?php echo ($value["color"]); ?></span><span>[<?php echo ($value["name"]); ?>]</span> --><strong style="color:<?php echo ($value["color"]); ?>"> [<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?></td>
						<td><?php echo ($v["cate"]); ?></td>
						<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
						<td>
							[<a href="">修改</a>]
							[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrach_assis', array('id' => $v['id']));?>">删除</a>]
						</td>
					

					</tr><?php endforeach; endif; ?>
				
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