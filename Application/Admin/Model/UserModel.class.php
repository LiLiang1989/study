<?php

namespace Admin\Model;

use Think\Model;

class UserModel extends Model {
	
	public function getUserList() {
		$User = M ( 'admin' );
		
		$user_list = $User->order ( 'id desc' )->select ();
		
		return $user_list;
	}
}