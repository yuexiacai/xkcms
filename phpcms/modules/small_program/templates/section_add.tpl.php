<?php
	defined('IN_ADMIN') or exit('No permission resources.');
	include $this->admin_tpl('header');?>
	<div class="common-form">
		<form name="myform" id="myform" action="" method="post">
			<table width="100%" class="table_form contentWrap">
				<tr>
					<th >科室名称：</th>
					<td><input type="text" name="info[title]" id="title" class="input-text" ></td>
				</tr>
				<tr>
					<th>类型：</th>
					<td>
						<?php echo form::radio(array(1=>'单页', 2=>'文章列表', 3=>'图文列表'), 2, "name='info[c_type]' id='c_type' "); ?>
						<!-- <input type='radio' name='info[c_type]' value='1' onclick="ico_show(1)" > 单页&nbsp;&nbsp;&nbsp;&nbsp;
						<input type='radio' name='info[c_type]' value='2' onclick="ico_show(1)" checked> 文章列表&nbsp;&nbsp;&nbsp;&nbsp;
						<input type='radio' name='info[c_type]' value='3' onclick="ico_show(2)" > 图文列表 -->
					</td>
				</tr>
				<tr>
					<th>是否显示：</th>
					<td>
						<?php echo form::radio(array(1=>'是', 2=>'否'), 1, "name='info[is_show]' id='is_show' "); ?>
					</td>
				</tr>
				<tr>
					<th>显示图标：</th>
					<td><?php echo form::images('info[ico]', 'ico', $ico, 'small_program');?></td>
				</tr>
			</table>
			<!--table_form_off-->
			<div class="bk15"></div>
			<div class="btn"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="<?php echo L('submit')?>"/></div>
		</form>
	</div>

</body>
</html>