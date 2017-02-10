<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	//Show the real time
    	$now_time = date('Y-m-d H:i:s',time());
    	$this->assign('time',$now_time);

    	//Show the url
    	$url = SITE_URL;
    	$this->assign('url',$url);
    	
    	//PHP version
    	$version = PHP_VERSION;
    	$this->assign('version',$version);
        $this->display();
    }
}