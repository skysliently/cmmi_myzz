<?php if (!defined('THINK_PATH')) exit();?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>work</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<style type="text/css" media="all">@import "__PUBLIC__/style/style.css";</style>
	<!-- <link rel="stylesheet" href="__INDEX__/assets/css/amazeui.css" /> -->
	<!--[if lt IE 7]>
	<style type="text/css">@import "style/ie.css";</style>
	<script src="script/DD_belatedPNG.js" type="text/javascript"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('#logo span, #loginarea, #panellogin, .textboxlogin, #shadowslideshow, img');
	</script>
	<![endif]-->
	<!--[if IE 7]><style type="text/css">@import "style/ie7.css";</style><![endif]-->
	<script src="__PUBLIC__/script/jquery.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/ui_core.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/ui_tabs.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/lightbox.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/easing.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/jcarousel.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/slideshow.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/twitter.js" type="text/javascript"></script>
	<script src="__PUBLIC__/script/gettwitter.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
		$("#butslide").click(function(){
				$("#panellogin").slideToggle("fast");
				$(this).toggleClass("active"); return false;
		}); 
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
	});
	</script>
</head>
<body>
<p><a class="skiplink" href="#maincontent">Skip over navigation</a></p>
<div id="container">
	<div id="wrapper">
		<div id="header">
			<div id="headertop">
				<!-- <a href="#" z-index="0" class="replace">sadasd</a> -->
				<div id="loginarea">
					<p class="notlogin">登录后台</p>
					<p class="loginbut"><a href="http://localhost/blog/index.php/Admin/Login/index" class="butlogin" ">Login</a> <span>or</span> <a href="#" class="butlogin">Signup</a></p>
					
				</div>
			</div>
			<div id="placemainmenu">
				<ul id="mainmenu">
					<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li><a href="<?php echo U(GROUP_NAME . '/Index/index',array('id' => $v['id']));?>"><?php echo ($v["name"]); ?></a>
							<?php if($v['child']): ?><ul>
									<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$value): ?><li><a href="<?php echo U(GROUP_NAME . '/Index/index',array('id' => $value['id']));?>"><?php echo ($value["name"]); ?></a></li><?php endforeach; endif; ?>
								</ul><?php endif; ?>
						</li><?php endforeach; endif; ?>
				</ul>
				<form method="post" action="#" id="frmsearch">
					<div>
						<input type="text" name="search" class="textboxsearch" value="Search" onblur="if(this.value.length == 0) this.value='Search';" onclick="if(this.value == 'Search') this.value='';" /> <input type="submit" name="submitsearch" class="submitsearch" value="Search" />
					</div>
				</form>
				<div class="clear"></div>
			</div>
		</div>
		<div id="content">
		
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">博文</h1>
					<div class="boxbigcontent">
						
					<table class='table'>
						<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr align="center">
								<td align="center"><h1><?php echo ($v["title"]); ?></h1></td>						
							</tr>
							<tr>发布时间：<?php echo (date('y-m-d H:i',$v["time"])); ?></tr>
							<tr><?php echo ($v["content"]); ?></td><?php endforeach; endif; ?>
					
					</table>
		






					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div>
			<div id="nav">
				<ul id="tabsnav">
					<li><a href="#panel1">xxxxxxx1</a></li>
					<li><a href="#panel2">xxxxxxx2</a></li>
					<li class="last"><a href="#panel3">xxxxxxx3</a></li>
				</ul>
				<div class="tabscontent" id="panel1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec leo et nunc fermentum viverra nec at sem:</p>
					
				</div>
				<div class="tabscontent" id="panel2">
					<!-- <a href="images/portfolio_1.jpg" id="linklatest" class="popup" title="King Resto"><img src="images/photo_1.jpg" alt="King Resto" /></a> -->
					<!-- <ul id="tabsproject">
						<li><strong>Client:</strong> King Resto</li>
						<li><strong>What We Do:</strong> Logo Design &amp; Web Design</li>
						<li><strong>Website:</strong> <a href="#">google.com</a></li>
					</ul> -->
				</div>
				<div class="tabscontent" id="panel3">
					<!-- <ul id="listnewsnav">
						<li><a href="#">Lorem ipsum dolor.</a></li>
						<li><a href="#">Praesent nec leo et nunc fermentum viverra nec at sem. fermentum viverra nec at sem.</a></li>
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
						<li><a href="#">Ut dui sapien, vulputate id tincidunt nec, semper quis.</a></li>
						<li><a href="#">Lorem ipsum dolor</a></li>
					</ul> -->
					<a href="#" class="linkreadmore">Read more News &#187;</a>
					<div class="clear"></div>
				</div>
				<div class="boxnav">
					<h3 class="titlenav">Main Menu</h3>
					<div class="boxnavcontent">
						<ul class="menunav">
							<li><a href="#">xxxxxxxxx</a></li>
							<li><a href="#">xxxxxxxxx</a></li>
							<li><a href="#">xxxxxxxxx</a></li>
							<li><a href="#">xxxxxxxxx</a></li>
							<li><a href="#">xxxxxxxxx</a></li>
							<li class="last"><a href="#">xxxxxxxxx</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">		
			<ul id="menufooterright">
				<li>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx </li>
				<li class="last"><a href="#">回到顶部</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>