<?php
class Index_c extends MY_Controller {
	public function index(){
		$this->load->helper('my');
		
		/* 测试数据 */
		$data['test'] = '首页';
		
		$this->MyView('index/index',$data);
	}
}
?>