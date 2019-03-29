<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript">
function ckForm(){
	var Patient=$.trim($("#txt_name").val());
	if(Patient =="")
	{
		alert("未填姓名");
		return false;	
	}
	var Tel=$.trim($("#txt_tel").val());
	if(Tel=="")
	{
	  alert("未填电话号码");
	  return false;	
	}else if(Tel !="" &&(!Tel.match(/^(?:13\d|15[0-9]|18[0-9])\d{8}$/)) && (!Tel.match(/^(0\d{2,3})?(\d{7,8})$/)))
	{
	  alert ("电话号码错误");
	  return false;	
	}
	else
	{
		//alert("成功！");
		return flase;
	}
	
	}
</script>

<div class="count">
 <form method="post" action="?m=formguide&c=index&a=show&formid=12&siteid=1" name="myform" id="myform">
    <div class="sum navthr center">
      <div class="sum navyuyue center">网上预约系统</div>
      <div class="sum navyuyeA center">
        <div class="navyuyeAa">* 姓名:</div>
        <div class="navyuyeAe">
          <input name="info[txt_name]" id="txt_name" type="text" class="navyueytxt">
        </div>
        <div class="navyuyeAa navyuyeAb">* 电话:</div>
        <div class="navyuyeAe navyuyeAf">
          <input name="info[txt_tel]" id="txt_tel" type="text" class="navyueytxt">
        </div>
        <div class="navyuyeAa navyuyeAc">* 地址:</div>
        <div class="navyuyeAe navyuyeAg">
          <input name='info[txt_add]' id='txt_add' type="text" class="navyueytxt">
        </div>
        <div class="navyuyeAa navyuyeAd">* 留言:</div>
        <div class="navyuyeAe navyuyeAh">
          <textarea name='info[txt_count]' id='txt_count' cols="" rows="" class="navyueytxt1"></textarea>
        </div>
        <div class="navyytj">
          <!--
          	<input name="" type="button" class="navyytji" value="加密提交" >
          -->
          
          <!--<input type="submit" name="dosubmit" id="dosubmit" onclick="ckForm();return false;" class="navyytji" value="加密提交">-->
          <img style="width:100%" id="dosubmit" src="<?php echo M1_PATH;?>images/r_03.png"  onclick="ckForm();return false;"/>
          
        </div>
      </div>
    </div>
  </form>
</div>
<div class="count">
  <div class="sum  center">
    <div class="sum navfotter center"> Copyright ©重庆若家商贸有限公司 All rights reserved.
     <span>地址：重庆市南岸区南城大道1号7幢15F</span>
     <span>电话：<a href="tel:400-0230-308">400-0230-308</a>，<a href="tel:62389336">62389336</a></span>   
     <span>邮箱：344412346@qq.com</span>
     <span>渝ICP备：渝ICP备13000437号-1 技术支持：赛博捷睿</span>
     <span>渝公网安备 50010802002469号</span>
     </div>
  </div>
</div>
<div class="count" id="floatbottom2">
  <div class="fontter center">
    <ul>
      <li><a class="a1" href="javascript:void(0);" onclick="swt('底部咨询1');"><img src="<?php echo M1_PATH;?>images/b_03a.jpg">&nbsp;索取资料</a></li>
      <li><a class="a2" href="tel:18996166669"><img src="<?php echo M1_PATH;?>images/b_05.jpg">&nbsp;财富热线</a></li>
      <li><a class="a3" href="javascript:void(0);" onclick="swt('底部咨询3');"><img src="<?php echo M1_PATH;?>images/b_07.jpg">&nbsp;在线咨询</a></li>
    </ul>
  </div>
</div>
