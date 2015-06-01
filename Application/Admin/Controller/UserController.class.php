<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller {
	public function login($username, $password) {
		if (IS_POST) {
			$username = $_POST ['username'];
			$password = $_POST ['password'];
			if (UserController::checkLogin ( $username, $password )) {
				$_SESSION ['admin'] = $username; // 将登录用户名赋给SESSION变量
				$msg = '登陆成功';
			} else {
				$msg = '登录失败！用户名或密码不正确！';
			}
		} else {
			$msg = '操作失败，请刷新后重试！';
		}
		
		$this->ajaxReturn ( $msg, 'json' );
	}
	public function register() {
		if (IS_POST) {
			$text = $_POST ['text'];
			$ps = $_POST ['password'];
			$rps = $_POST ['repassword'];
			$n_name = $_POST ['nickName'];
			$v_code = $_POST ['verifyCode'];
			
			if (UserController::check_verify ( $v_code, '' )) {
				if (UserController::is_exist_user ( $text )) {
					$msg = '用户名已存在！';
				} else {
					$user = M ( 'admin' );
					$data ['account'] = $text;
					$data ['password'] = md5 ( $ps );
					$data ['nickname'] = $n_name;
					$user->create ( $data );
					if ($user->add ( $data )) {
						$msg = '注册成功';
					} else {
						$msg = '注册失败！';
					}
				}
			} else {
				$msg = '验证码错误！';
			}
		} else {
			$msg = '操作失败，请刷新重试！';
		}
		$this->ajaxReturn ( $msg, 'json' );
	}
	
	public function logout(){
		session('userName',null);
		$this->redirect('/admin/login');
	}
	// 登陆检查
	public function checkLogin($username, $password) {
		$user = M ( 'admin' );
		$map ['account'] = $username;
		$map ['password'] = md5 ( $password);
		
		$result = $user->where ( $map )->find ();
		if ($result) {
			$login = true;
		} else {
			$login = false;
		}
		return $login;
	}
	public function is_exist_user($account) {
		$flag = false;
		$user = M ( 'admin' );
		$data ['account'] = $account;
		$result = $user->where ( $data )->find ();
		if ($result) {
			$flag = true;
		}
		return $flag;
	}
	public function verify() {
		$config = array (
				'fontSize' => 16, // 验证码字体大小
				'length' => 4, // 验证码位数
				'useNoise' => false 
		); // 关闭验证码杂点
		
		$Verify = new \Think\Verify ( $config );
		$Verify->codeSet = '0123456789';
		$Verify->entry ();
	}
	function check_verify($code, $id = '') {
		$verify = new \Think\Verify ();
		return $verify->check ( $code, $id );
	}
}