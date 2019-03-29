<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo M1_PATH;?>css/publice.css" rel="stylesheet" type="text/css">
<link href="<?php echo M1_PATH;?>css/style.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript" src="<?php echo M1_PATH;?>js/rem.js"></script>
<body>

<?php include template("content_m","header"); ?>
<?php include template("content_m","header_menu"); ?>


<?php include template("content_m","banner"); ?>

<div class="count">
	<div class="sum l_nav01 center">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?></div>
</div>


<div class="count">
	<div class="sum center">
    	<div class="c_nav01 center">
        	<h3><?php echo $title;?></h3>
            <div class="c_nav02 center">
              <?php echo $content;?>
            </div>
            
        </div>
    </div>
    
    <div class="sum center">
     <div class="pagination center">
    <a href="<?php echo $previous_page['url'];?>">上一篇</a>   
    <a href="<?php echo $next_page['url'];?>">下一篇</a>
    <a href="<?php echo siteurl($siteid);?>">返回首页</a>
        


</div>
    </div>
    
</div>


<?php include template("content_m","footer"); ?>



</body>
</html>
