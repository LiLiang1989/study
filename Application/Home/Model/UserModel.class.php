<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
	public function getUser($uid = 0) {
		$user = M ( 'user' );
		$map ['id'] = $uid;
		$result = $user->where ( $map )->find ();
		return $result;
	}
}

