<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<link href="<?php echo PC1_PATH;?>css/webstyle.css" type="text/css" rel="stylesheet" />
<link href="<?php echo PC1_PATH;?>css/public.css" type="text/css" rel="stylesheet" />
<link href="<?php echo PC1_PATH;?>css/layout.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/loadimage.js"></script>
</head>
<body>
<?php include template("content","header"); ?>
<div class="subBanner_b"> </div>
<div class="subBody">
  <div class="">
    <?php include template("content","left"); ?>
    <div class="w992">
      <div>
        <h2 class="left_h2"><?php echo $CAT['catname'];?><span class="fr txt14 mar_r15">您当前所在位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?></span></h2>
      </div>
      <div class="subCont">
        <ul class="navnews">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><a href="<?php echo $r['url'];?>"><img src="<?php echo M1_PATH;?>/images/r_03.jpg"><?php echo $r['title'];?></a></li>
           <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>          
        </ul>
        <div class="cl"></div>
        <div class="page_list"><?php echo $pages;?></div>
      </div>
    </div>
    <div class="cl"></div>
  </div>
</div>
<?php include template("content","footer"); ?>
</body>
</html>
