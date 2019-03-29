<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo PC1_PATH;?>css/layout.css">
<link href="<?php echo PC1_PATH;?>css/store.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo PC1_PATH;?>css/swiper.css">
<link rel="stylesheet" href="<?php echo PC1_PATH;?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo PC1_PATH;?>css/video-js.css">
<link href="<?php echo PC1_PATH;?>css/public.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo PC1_PATH;?>css/lytebox.css" type="text/css" media="screen">
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/top.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jquery.jslides.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/dmzs.js" ></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/common.js" ></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jquery.jslides.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/jq_scroll.js"></script>
<script type="text/javascript" src="<?php echo PC1_PATH;?>js/videojs-ie8.min.js"></script>
<!--tv-->
<script type="text/javascript" language="javascript" src="<?php echo PC1_PATH;?>js/lytebox.js"></script>
<!--tv-->
<script type="text/javascript">
$(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:100,timer:1000,up:"but_up",down:"but_down"});
});
</script>
<body id="d0" class="index_bg">
<?php include template("content","header"); ?>
<div class="count">
  <div id="full-screen-slider">
    <ul id="slides">
      <li style="background:url('<?php echo PC1_PATH;?>images/1491475153.jpg') no-repeat center top"><a href="javascript:;" target="_blank">若家</a></li>
      <li style="background:url('<?php echo PC1_PATH;?>images/1491467259.jpg') no-repeat center top"><a href="javascript:;" target="_blank">若家</a></li>
      <li style="background:url('<?php echo PC1_PATH;?>images/1491473608.jpg') no-repeat center top"><a href="javascript:;" target="_blank">若家</a></li>
      <li style="background:url('<?php echo PC1_PATH;?>images/PC-banner.jpg') no-repeat center top"><a href="javascript:;" target="_blank">若家</a></li>
    </ul>
  </div>
</div>


<div class="count">
  <div class="three_nav_btn">
    <div class="three_nav_btn_main">
      <div class="three_nav_btn_img"><img src="<?php echo PC1_PATH;?>images/x_redian.jpg"></div>
      <div class="three_nav_btn_txt"> <a href="<?php echo siteurl($siteid);?>/list-14-1.html">
        <h3>实时热点 <img src="<?php echo PC1_PATH;?>images/hot.jpg"></h3>
        <p>实时掌握最新热点</p>
        </a> </div>
      <div class="clear"></div>
    </div>
    <div class="three_nav_btn_main"> <a href="<?php echo siteurl($siteid);?>/list-13-1.html">
      <div class="three_nav_btn_img"><img src="<?php echo PC1_PATH;?>images/mendian.jpg"></div>
      <div class="three_nav_btn_txt">
        <h3>加盟留言</h3>
        <p>进货留言</p>
      </div>
      <div class="clear"></div>
      </a> </div>
    <div class="three_nav_btn_main"> <a href="https://sso.dinghuo123.com"  target="_blank">
      <div class="three_nav_btn_img"><img src="<?php echo PC1_PATH;?>images/wuliu.jpg"></div>
      <div class="three_nav_btn_txt">
        <h3>物流配送</h3>
        <p>坚持以"便利"为核心</p>
      </div>
      <div class="clear"></div>
      </a> </div>
    <div class="clear"></div>
  </div>
</div>
<div class="count navmdzs">
  <div>
    <div style="text-align: center; padding:60px 0 20px; "></div>
    <div id="box">
      <pre class="prev">prev</pre>
      <pre class="next">next</pre>
      <ul>
        <li><img src="<?php echo PC1_PATH;?>images/dis1.jpg" /></li>
        <li><img src="<?php echo PC1_PATH;?>images/dis2.jpg" /></li>
        <li><img src="<?php echo PC1_PATH;?>images/dis3.jpg" /></li>
        <li><img src="<?php echo PC1_PATH;?>images/dis4.jpg" /></li>
        <li><img src="<?php echo PC1_PATH;?>images/dis5.jpg" /></li>
        <li><img src="<?php echo PC1_PATH;?>images/dis6.jpg" /></li>
      </ul>
    </div>
  </div>
</div>
<div class="count navhxys">
  <div class="hx_bg">
    <div class="hx_bt pad_t70"><img src="<?php echo PC1_PATH;?>images/hxys.png"></div>
    <div class="hx_txt">完善商业生态 打造零售终极解决方案</div>
    <!---------------------------------------------------------------------------->
    <div class="six_advantages" id="six_advantanges">
      <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(-1309px, 0px, 0px); transition-duration: 500ms;">
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/1.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 261.8px;">
            <div class="img_wrap"><img src="<?php echo PC1_PATH;?>images/2.1.png">
              <div class="model"></div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 261.8px;">
            <div class="img_wrap"><img src="<?php echo PC1_PATH;?>images/3.1.png">
              <div class="model"></div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/4.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <!--	<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 261.8px;">
                        <div class="img_wrap">
                            <img src="templates/default/images/5.1.png">
                            <div class="model">

                            </div>
                        </div>
                    </div> -->
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/6.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/1.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/2.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/3.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide" data-swiper-slide-index="3" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/4.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <!--
            <div class="swiper-slide" data-swiper-slide-index="4" style="width: 261.8px;">
                        <div class="img_wrap">
                            <img src="templates/default/images/5.1.png">
                            <div class="model">

                            </div>
                        </div>
             </div>
        -->
          <div class="swiper-slide" data-swiper-slide-index="4" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/6.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/1.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/2.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/3.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/4.1.png">
              <div class="model"> </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 261.8px;">
            <div class="img_wrap"> <img src="<?php echo PC1_PATH;?>images/6.1.png">
              <div class="model"> </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev arrow-left1"><img src="<?php echo PC1_PATH;?>images/x_arr_left.png"></div>
        <div class="swiper-button-next arrow-right1"><img src="<?php echo PC1_PATH;?>images/x_arr_right.png"></div>
      </div>
    </div>
    <script src="<?php echo PC1_PATH;?>js/swiper.js"></script> 
    <script>

        
        function __domReaday() {
            jQuery(document).ready(function () {


                var BanSwiper = new Swiper('#sem_ban_box', {
                    paginationClickable: true,
                    autoplayDisableOnInteraction: false,
                    loop: true,
                    speed: 500,
                    autoplay: 3000,
                    pagination: '#sem_ban_box .swiper-pagination',


                });

                var sixAdSwiper = new Swiper('#six_advantanges .swiper-container', {
                    pagination: '#six_advantanges .pagination',
                    paginationClickable: true,
                    autoplayDisableOnInteraction: false,
                    centeredSlides: true,
                    slidesPerView: 5,
                    loop: true,
                    autoplay: 5000,
                    speed: 500,
                    watchActiveIndex: true,
                    loopedSlides :6,
                    nextButton: '#six_advantanges .swiper-button-next',
                    prevButton: '#six_advantanges .swiper-button-prev',
                });
            })
        }

    </script> 
    <script>
        function domReady_sem() {
           
            $(function () {
                $('#semgoTop').on('click', function () {
                    var sc = $(window).scrollTop();
                    $('body,html').animate({scrollTop: 0}, 500);
                })
            });
        }

    </script> 
    <script type="text/javascript">
jQuery(document).ready(function () {
__domReaday()
domReady_sem();
});</script> 
    
    <!----------------------------------------------------------------------------> 
    
  </div>
</div>
<div class="count">
  <div class="seven">
    <div style="width: 588px; height: 106px; margin: 0  auto; padding-top: 70px; "> <img src="<?php echo PC1_PATH;?>images/jituan.png"> </div>
    <ul class="boxw1 clearfixed">
      <li class="first">
        <p>统一VI装修</p>
      </li>
      <li class="second">
        <p>统一陈列管理</p>
      </li>
      <li class="third">
        <p>统一店员培训</p>
      </li>
    </ul>
    <ul class="boxw2 clearfixed">
      <li class="forth">
        <p>统一售后服务</p>
      </li>
      <li class="fifth">
        <p>统一促销宣传</p>
      </li>
      <li class="sixth">
        <p>统一仓储配送</p>
      </li>
      <li class="seventh">
        <p>统一智能系统</p>
      </li>
    </ul>
  </div>
  <div class="money_ways" style="display:none">
    <div class="two_bao"><img src="<?php echo PC1_PATH;?>images/two_bao.png"></div>
    <div class="banner_index"> <a href="javascript:void(0);" class="btn btnPre" id="banner_index_pre"></a> <a href="javascript:void(0);" class="btn btnNext" id="banner_index_next"></a>
      <ul class="banner_wrap" id="banner_index">
        <li><a href="#" target="_blank"><img src="<?php echo PC1_PATH;?>images/banner_index_1.png"/></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo PC1_PATH;?>images/banner_index_2.png"/></a></li>
      </ul>
    </div>
    <div class="indexBanner_num" id="index_numIco"></div>
    <script type="text/javascript">
var ShowPre1 = new ShowPre({box:"banner_index",Pre:"banner_index_pre",Next:"banner_index_next",numIco:"index_numIco",loop:1,auto:1});
</script> 
  </div>
</div>
<div class="count navqydl">
  <div style="padding:50px 0">
    <div class="mnb">
      <div class="mnb_b" style="width:504px">
        <h3 class="p_tit p_tit2"><span>&nbsp;</span>区域代理：你距离成功只差一步</h3>
        <div class="jmdl"> <a href="message.php"><img src="<?php echo PC1_PATH;?>images/jiameng.jpg" alt="加盟若家便利店"></a>
          <div class="con">
            <h5><span>全国</span>加盟热线：</h5>
            <h4><span>4</span><span>0</span><span>0</span>-<span>0</span><span>2</span><span>3</span>-<span>0</span><span>3</span><span>0</span><span>8</span></h4>
            <div class="time"> <img src="<?php echo PC1_PATH;?>images/kefu.gif" alt="">
              <p>微信号：18996166669</p>
              <img src="<?php echo PC1_PATH;?>images/kefu1.gif" alt=""> </div>
            <script>
						$(function(){
							$('.jmdl').mouseover(function(){
								var $h4 = $(this).find('h4');
								$h4.find('span').each(function(){
									var index = $(this).index();
									$(this).addClass('jm_tel' + index);
								});
							});
							$('.jmdl').mouseleave(function(){
								var $h4 = $(this).find('h4');
								$h4.find('span').removeClass();
							});
						});
					</script> 
          </div>
          <div class="clear"></div>
        </div>
        <div class="jm_show"> <a id="jm_t" class="jm_show_btn j_s_b_l" href="javascript:void(0);"></a> <a id="jm_b" class="jm_show_btn j_s_b_r" href="javascript:void(0);"></a>
          <ul id="jm_s_ul" style="margin-top: -24px;">
            <li>恭喜若家便利店朝天门大融汇店开业！<span>04-02</span></li>
            <li>恭喜若家便利店万科西城开业！<span>05-17</span></li>
            <li>恭喜若家便利店叠彩西城开业！<span>02-15</span></li>
            <li>恭喜若家便利店南岸区茶园中铁开业！<span>03-21</span></li>
            <li>恭喜若家便利店南岸区茶园奥园店开业！<span>04-06</span></li>
            <li>恭喜若家便利店南岸区茶园同景国际店开业！<span>04-02</span></li>
            <li>恭喜若家便利店南岸区茶园鲁能景秀店开业！<span>04-24</span></li>
            <li>恭喜若家便利店南岸区桃源路店开业！<span>04-09</span></li>
            <li>恭喜若家便利店中交景悦店开业！<span>03-31</span></li>
            <li>恭喜若家便利店长寿店开业！<span>03-31</span></li>
            <li>恭喜若家便利店民安华福店开业！<span>03-31</span></li>
            <li>恭喜若家便利店龙湖百乐街开业！<span>02-21</span></li>
            <li>恭喜若家便利店时光城店开业！<span>08-15</span></li>
            <li>恭喜若家便利店龙湖新一街4店开业！<span>08-06</span></li>
            <li>恭喜若家便利店龙湖新一街3店开业！<span>08-05</span></li>
            <li>恭喜若家便利店龙湖新一街2店开业！<span>08-03</span></li>
            <li>恭喜若家便利店龙湖新一城店开业！<span>09-05</span></li>
            <li>恭喜若家便利店悦秀上东店开业<span>07-08</span></li>
            <li>恭喜若家便利店人和龙寿路店开业！<span>07-04</span></li>
            <li>恭喜若家便利店欧欧鹏教育城店开业！<span>07-08</span></li>
          </ul>
        </div>
        <script>
				$(function(){
					var i = 1;
					var size = $('#jm_s_ul li').length;
					var a = true;
					auto = setInterval(function(){
						if(a && i < size - 1){
							$('#jm_t').removeClass('over');
							$('#jm_s_ul').animate({
								'margin-top':-i*24
							},300);
							if(i == size - 2){
								$('#jm_b').addClass('over');
								a = false;
							}
							i++;
						}else if(!a && i > 1){
							$('#jm_b').removeClass('over');
							$('#jm_s_ul').animate({
								'margin-top':-(i-2)*24
							},300);
							if(i == 2){
								$('#jm_t').addClass('over');
								a = true;
							}
							i--;
						}
					},3000);
					$('#jm_b').click(function(){
						clearInterval(auto);
						auto = setInterval(function(){
							if(a && i < size - 1){
								$('#jm_t').removeClass('over');
								$('#jm_s_ul').animate({
									'margin-top':-i*24
								},300);
								if(i == size - 2){
									$('#jm_b').addClass('over');
									a = false;
								}
								i++;
							}else if(!a && i > 1){
								$('#jm_b').removeClass('over');
								$('#jm_s_ul').animate({
									'margin-top':-(i-2)*24
								},300);
								if(i == 2){
									$('#jm_t').addClass('over');
									a = true;
								}
								i--;
							}
						},3000);
						$('#jm_t').removeClass('over');
						if(i < size - 1){
							$('#jm_s_ul').animate({
								'margin-top':-i*24
							},300);
							if(i == size - 2){
								$('#jm_b').addClass('over');
							}
							i++;
						}
					});
					$('#jm_t').click(function(){
						clearInterval(auto);
						auto = setInterval(function(){
							if(a && i < size - 1){
								$('#jm_t').removeClass('over');
								$('#jm_s_ul').animate({
									'margin-top':-i*24
								},300);
								if(i == size - 2){
									$('#jm_b').addClass('over');
									a = false;
								}
								i++;
							}else if(!a && i > 1){
								$('#jm_b').removeClass('over');
								$('#jm_s_ul').animate({
									'margin-top':-(i-2)*24
								},300);
								if(i == 2){
									$('#jm_t').addClass('over');
									a = true;
								}
								i--;
							}
						},3000);
						$('#jm_b').removeClass('over');
						if(i > 1){
							$('#jm_s_ul').animate({
								'margin-top':-(i-2)*24
							},300);
							if(i == 2){
								$('#jm_t').addClass('over');
							}
							i--;
						}
					});
				});
			</script> 
      </div>
      <div class="mnb_b " style="width:675px; margin-left:10px;" id="news_all">
        <h3 class="p_tit"><span>&nbsp;</span>签约成功</h3>
        <div class="scrollbox"> 
          <!--	<div class="scroltit"><small id="but_up">↑向上</small><small id="but_down">↓向下</small></div>-->
          <div id="scrollDiv">
            <ul>
              <li><span class="fr">04-02</span>恭喜若家便利店朝天门大融汇店开业！</li>
              <li><span class="fr">05-17</span>恭喜若家便利店万科西城开业！</li>
              <li><span class="fr">02-15</span>恭喜若家便利店叠彩西城开业！</li>
              <li><span class="fr">03-21</span>恭喜若家便利店南岸区茶园中铁开业！</li>
              <li><span class="fr">04-06</span>恭喜若家便利店南岸区茶园奥园店开业！</li>
              <li><span class="fr">04-02</span>恭喜若家便利店南岸区茶园同景国际店开业！</li>
              <li><span class="fr">04-24</span>恭喜若家便利店南岸区茶园鲁能景秀店开业！</li>
              <li><span class="fr">04-09</span>恭喜若家便利店南岸区桃源路店开业！</li>
              <li><span class="fr">03-31</span>恭喜若家便利店中交景悦店开业！</li>
              <li><span class="fr">03-31</span>恭喜若家便利店长寿店开业！</li>
              <li><span class="fr">03-31</span>恭喜若家便利店民安华福店开业！</li>
              <li><span class="fr">02-21</span>恭喜若家便利店龙湖百乐街开业！</li>
              <li><span class="fr">08-15</span>恭喜若家便利店时光城店开业！</li>
              <li><span class="fr">08-06</span>恭喜若家便利店龙湖新一街4店开业！</li>
              <li><span class="fr">08-05</span>恭喜若家便利店龙湖新一街3店开业！</li>
              <li><span class="fr">08-03</span>恭喜若家便利店龙湖新一街2店开业！</li>
              <li><span class="fr">09-05</span>恭喜若家便利店龙湖新一城店开业！</li>
              <li><span class="fr">07-08</span>恭喜若家便利店悦秀上东店开业</li>
              <li><span class="fr">07-04</span>恭喜若家便利店人和龙寿路店开业！</li>
              <li><span class="fr">07-08</span>恭喜若家便利店欧欧鹏教育城店开业！</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="count navwlyl">
  <div class="future">
    <div style="text-align: center; padding:40px 0 20px; "><img src="<?php echo PC1_PATH;?>images/nav07_03.jpg"></div>
    <ul class="show clearfixed">
      <li> <img src="<?php echo PC1_PATH;?>images/fur_1.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico1.png" class="fuico">
          <h4>生活缴费</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico1_ac.png" class="fuico_ac">
          <h4>生活缴费</h4>
          <p class="english">Life pay cost</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_2.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico2.png" class="fuico">
          <h4>家政服务</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico2_ac.png" class="fuico_ac">
          <h4>家政服务</h4>
          <p class="english">household service</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_3.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico3.png" class="fuico">
          <h4>生鲜干货</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico3_ac.png" class="fuico_ac">
          <h4>生鲜干货</h4>
          <p class="english">Fresh dry food</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_4.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico4.png" class="fuico">
          <h4>鲜花预定</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico4_ac.png" class="fuico_ac">
          <h4>鲜花预定</h4>
          <p class="english">Flowers scheduled</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_5.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico5.png" class="fuico">
          <h4>票务预定</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico5_ac.png" class="fuico_ac">
          <h4>票务预定</h4>
          <p class="english">Ticket reservation</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_6.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico6.png" class="fuico">
          <h4>收发快递</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico6_ac.png" class="fuico_ac">
          <h4>收发快递</h4>
          <p class="english">send and receive delivery</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_7.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico7.png" class="fuico">
          <h4>教育培训</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico7_ac.png" class="fuico_ac">
          <h4>教育培训</h4>
          <p class="english">Education training</p>
        </div>
      </li>
      <li> <img src="<?php echo PC1_PATH;?>images/fur_8.png">
        <div class="default"> <img src="<?php echo PC1_PATH;?>images/fuico8.png" class="fuico">
          <h4>衣服干洗</h4>
        </div>
        <div class="model"> <img src="<?php echo PC1_PATH;?>images/fuico8_ac.png" class="fuico_ac">
          <h4>衣服干洗</h4>
          <p class="english"> Clothes dry cleaning</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="prargrah">锁定社区消费能力&nbsp;&nbsp;&nbsp;多样的盈利业务&nbsp;&nbsp;&nbsp;一站式社区生活解决方案<i class="dian"></i></div>
</div>

<div class="count">
	<div class="m">
		<video id="my-video" class="video-js" controls preload="auto" width="300" height="200"
		  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
			<source src="<?php echo PC1_PATH;?>images/video.mp4" type="video/mp4">
			
			<p class="vjs-no-js">
			  To view this video please enable JavaScript, and consider upgrading to a web browser that
			  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
			</p>
		  </video>
		  <script data-cfasync="false" src="<?php echo PC1_PATH;?>js/email-decode.min.js"></script><script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script>	
		  <script type="text/javascript">
			var myPlayer = videojs('my-video');
			videojs("my-video").ready(function(){
				var myPlayer = this;
				myPlayer.play();
			});
		</script>
</div>
</div>


<?php include template("content","footer"); ?>

</body>
</html>
