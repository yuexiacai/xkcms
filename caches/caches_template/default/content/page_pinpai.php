<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
</head>
<link href="<?php echo PC1_PATH;?>css/webstyle.css" rel="stylesheet" type="text/css">
<link href="<?php echo PC1_PATH;?>css/public.css" rel="stylesheet" type="text/css">
<link href="<?php echo PC1_PATH;?>css/layout.css" rel="stylesheet" type="text/css" >
<link href="<?php echo PC1_PATH;?>css/video-js.css" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jquery.min.js"></script>

<body>
<?php include template("content","header"); ?> 

<!-- banner-->
<div class="subBanner_b"> </div>
<!-- /banner-->
<div class="subBody">
  <div> <?php include template("content","left"); ?>
    <div class="w992">
      <div>
        <h2 class="left_h2"><?php echo $CAT['catname'];?><span class="fr txt14 mar_r15">您当前所在位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?></span></h2>
      </div>
      <div class="subCont"> <?php echo $content;?>
        <div style="text-align:center; overflow:hidden; width:60%; height:auto; margin:0 auto;">
          <video id="my-video" class="video-js" controls preload="auto" width="500" height="400"
		  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
            <source src="<?php echo PC1_PATH;?>images/video.mp4" type="video/mp4">
            <p class="vjs-no-js"> To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a> </p>
          </video>
          <script data-cfasync="false" src="<?php echo PC1_PATH;?>js/email-decode.min.js"></script> 
          <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script> 
          <script type="text/javascript">
			var myPlayer = videojs('my-video');
			videojs("my-video").ready(function(){
				var myPlayer = this;
				myPlayer.play();
			});
		</script> 
        </div>
      </div>
    </div>
    <div class="cl"></div>
  </div>
</div>
<!-- footer--> 
<?php include template("content","footer"); ?> 
<!-- /footer-->

</body>
</html>
