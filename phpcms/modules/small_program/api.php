<?php
defined('IN_PHPCMS') or exit('No permission resources.');


pc_base::load_app_class('custom','small_program');

/**
* 小程序 API
*/
class api
{
	
	// 预处理
	private $db;
	function __construct() {
		// $this->banner_db = pc_base::load_model('x_banner_model');
		$this->column_db = pc_base::load_model('x_column_info_model');
		$this->content_db = pc_base::load_model('x_content_model');
		$this->nav_db = pc_base::load_model('x_nav_set_model');
		$this->basis_db = pc_base::load_model('x_basis_set_model');

		$this->custom = new custom();
	}


	// 首页
	public function init(){
		$info['banner'] = $this->custom->get_banner();
		$info['nav'] = $this->nav_db->select('nav_type=2');
		$info['section'] = $this->column_db->select('is_show=1');

		echo json_encode(array('status'=>1,'info'=>$info));
	}

	// 单页
	public function page(){
		$id = $_POST['id'];
		$tag = $_POST['tag'];
		

		$info['banner'] = $this->custom->get_banner();
		$info['content'] = $this->custom->get_content($id,$tag);

		// $txt = "log/page_".date("Ymd").".txt";
		// @file_put_contents($txt,"  id:  $id    tag:  $tag    content: ".json_encode($content)."    banner:  ".json_encode($banner)."    info:  ".json_encode($info)."		时间： ".date('H:i:s')."\r\n \r\n \r\n", FILE_APPEND);

		echo json_encode(array('status'=>1,'info'=>$info));
	}

	public function lists(){
		$id = $_POST['id'];
		$where = "cid=".$id;

		$data['num'] = $num = $this->content_db->count($where);
		$data['pagesize'] = $pagesize = 6;
		$data['max_page'] = $max_page = ceil($num/$pagesize);

		// $data['page'] = $page =(empty($_POST['page']) ? 1 : $_POST['page']) > ($max_page <= 0 ? 1 : $max_page) ? ($max_page <= 0 ? 1 : $max_page) : (empty($_POST['page']) ? 1 : $_POST['page']);
		$data['page'] = $page = (empty($_POST['page']) ? 1 : $_POST['page']);

		$offset = $pagesize*($page-1);

		$order = "id desc";
		$limit = "$offset, $pagesize";


		// $this->content_db->select($where, $data, $limit = "0,10",$order = '');
		
		if($page <= $max_page){
			$content = $this->content_db->select($where, "*", $limit, $order);
		}
		else{
			$data['page'] = $max_page;
			$content = array();
		}
		

		$info['content'] = $content;
		$info['page'] = $data;
		$info['banner'] = $this->custom->get_banner();


		echo json_encode(array('status'=>1,'info'=>$info));
	}


	public function set(){
		$set = $this->basis_db->get_one();

		$txt = "log/nav_".date("Ymd").".txt";
		@file_put_contents($txt,"  已成功访问!		时间： ".date('H:i:s')."\r\n \r\n \r\n", FILE_APPEND);

		$info['title'] = $set['title'];
		$info['frontColor'] = empty($set['title_color']) ? "#FFFFFF" : $set['title_color'];
		$info['backgroundColor'] = empty($set['t_bj_color']) ? "#000000" : $set['t_bj_color'];

		echo json_encode(array('status'=>1,'info'=>$info));
	}

	public function nav(){
		$info['nav'] = $nav = $this->nav_db->select('nav_type=1');

		$info['set'] = $set = $this->basis_db->get_one();

		$selectedColor = empty($set['nav_xz_color']) ? "#0000FF" : $set['nav_xz_color'];
		$data = array(
				"color" => empty($set['nav_color']) ? "#000000" : $set['nav_color'],
				'selectedColor' => $selectedColor,
				'backgroundColor' => empty($set['nav_bg_color']) ? "#FFFFFF" : $set['nav_bg_color'],
				'borderStyle' => empty($set['nav_j_color']) ? "#CCCCCC" : $set['nav_j_color'],
				"position" => "bottom"
			);
		$list = array();
		foreach ($nav as $key => $v) {
			$list[] =array(
					'pagePath' => $v['url'],
					'text' => $v['title'],
					'iconPath' => $v['ico'],
					'selectedIconPath' => $v['nav_img'],
					"selectedColor" => $selectedColor,
					"clas" => "menu-item2",
					active => true
				);
		}

		$data['list'] = $list;

		echo json_encode(array('status'=>1,'info'=>$data));
	}


}




