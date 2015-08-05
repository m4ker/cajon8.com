<html>
<head>
<meta charset="utf-8" />
<title><?php echo $title;?></title>
<link rel="Shortcut Icon" href="favicon.ico" />
<meta name="Keywords" content="卡宏鼓,箱鼓,Cajon,教程,资源">
<meta name="description" content="卡宏学院(cajon8.com)是一个收集和分享箱鼓相关资源的地方，站内收集了很多专业的文章，视频和书籍，我们要用互联网的玩法造福广大箱鼓爱好者。">
<style>
*{
margin:0;
padding:0;
}
p{
margin:2px 2px 10px 2px;
}
body{
font-size:14px;
text-align:center;
}
td{
font-size:14px;
}
#main{
width:600px;
margin:0 auto;
}
#header{
	text-align:right;
	margin: 20px 0 20px;
}
#menu{
	text-align:left;
	margin: 0 0 20px;
}
#menu ul{

}

#menu li{
	list-style:none;
	display:inline-block;
	width:20%;
	height:40px;
	line-height:40px;
	text-align:center;
	
	/*margin-right:2px;*/
}
#menu li a {
	display:inline-block;
	width:99%;
	height:40px;
	line-height:40px;
	background:#ddd;
	text-decoration:none;
}
#menu li a:hover {
	background:#eee;
}
#menu li a.active {
	background:#eee;
}
#content td{
	padding:5px 5px 10px 5px;
}
#footer{
	padding:20px;
}
</style>
</head>
<body>
<div id="main">
	<div id="header">
		<img src="images/cajon8.png" />
    	</div>
	<div id="menu">
		<?php 
			$pinfo       = pathinfo($_SERVER['PHP_SELF']);
			$script_name = $pinfo['filename'];
		?>
		<ul><li><a <?php if ($script_name == 'index') { ?>class="active" <?php } ?>href="/">首&nbsp;&nbsp;页</a></li><li><a <?php if ($script_name == 'video') { ?>class="active" <?php } ?>href="/video">视&nbsp;&nbsp;频</a></li><li><a <?php if ($script_name =='book') { ?>class="active" <?php } ?>href="/book">书&nbsp;&nbsp;籍</a></li><li><a <?php if ($script_name == 'cajon') { ?>class="active" <?php } ?>href="/cajon">箱&nbsp;&nbsp;鼓</a></li><li><a target="_blank" href="http://www.cajon.cn">箱鼓论坛</a></li></ul>
    	</div>