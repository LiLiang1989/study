<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {
	
	public function index() {
		$User = D('user');
		
		$user_list = $User ->getUserList();
		
		$this->assign("userList",$user_list);
		
		$this->display ();
	}
}