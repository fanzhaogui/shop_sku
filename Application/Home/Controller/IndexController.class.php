<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {	
    	// 好像是少了一个导航栏的设置
    	
    	$cats = D("GoodsCategory")->getAllData(["pid = 0"]); // 菜单栏的顶级分类


        // return dump($cats);


        $this->assign("topCats", $cats);
        $this->display();
    }

    public function getChilds()
    {
    	if (!IS_AJAX) {
	   		return ;
	   	}
		$id = isset($_POST["pid"]) ? $_POST["pid"] : 0;
    	$data = D("GoodsCategory")->getAllData(["pid = {$id}"]);
    	// print_r($data);
    	$this->ajaxReturn($data);
    }
}