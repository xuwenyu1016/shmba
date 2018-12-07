<?php exit;?>001553612175de6b2139665618b6d085c02e542ef4ecs:2770:"a:2:{s:8:"template";s:2706:"<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,user-scalable=no" name="viewport">
<title><?php echo $media["title"];?></title>
<meta name="keywords" content="<?php echo $media["keywords"];?>" />
<meta name="description" content="<?php echo $media["description"];?>" />
<link href="/themes/mobile/css/base.css" rel="stylesheet" type="text/css">
<link href="/themes/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/themes/mobile/css/slidebars.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="g-hd u-box f-cb f-container">
	<h1 class="m-logo"><?php echo $sys["site_title"];?></h1>
	<div class="m-nav"> <a href="javascript:;" id="menu"></a> </div>
</div>
<div class="m-crumb u-box f-cb f-container">
	<ul class="f-cb">
		<li><a href="/">首页</a></li>
		<?php foreach ($crumb as $vo) { ?>
		<li><i>&gt;</i><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a></li>
		<?php } ?>
	</ul>
</div>
<div class="m-box u-box f-container">
	<h3><?php echo $categoryInfo["name"];?></h3>
	<div class="lst">
		<ul>
			<?php foreach ($pageList as $vo) { ?>
			<li><a href="<?php echo $vo["aurl"];?>"><?php echo $vo["title"];?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="m-page m-box u-box f-container"> <?php echo $page;?> </div>
<div class="g-fb u-box">
	<div class="cprt">COPYRIGHT DUXCMS ALL RIGHTS RESERVED!</div>
	<div class="tool"><a href="/index.php?mobile=1">移动版</a> | <a href="/">电脑版</a></div>
</div>
<div class="sb-slidebar sb-left">
    <div class="title"><?php echo $categoryInfo["name"];?></div>
	<ul>
		<?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$categoryInfo['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
        <?php } ?>
	</ul>
	
	<div class="title">网站导航</div>
	<ul>
		<li><a href="/">网站首页</a></li>
		<?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>20, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
		<li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
		<?php } ?>
	</ul>
</div>

</body>
<script src="/themes/mobile/js/jquery-1.8.3.min.js"></script>
<script src="/themes/mobile/js/slidebars.min.js"></script>
<script>
$(document).ready(function(){
	var mySlidebars = new $.slidebars();
	$('#menu').on('click', function() {
		mySlidebars.toggle('left');
	});
});
</script>
</html>
";s:12:"compile_time";i:1522076175;}";