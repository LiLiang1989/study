<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
	/*
	 * 初始化
	 * */
	public function _initialize() {
		if (session ( "cur_user" ) == '' || session ( "cur_user" ) == null) {
			$this->redirect ( '/login' );
		}
	}
	/*
	 * 上传头像
	 * */
	public function uploadHeadPhoto() {
		if(IS_POST){
			$this->ajaxReturn('提交成功','JSON');
		}
	}
	/*
	 * 完善基本资料
	 * */
	public function profile() {
		$user = D('user');
		
		if(IS_POST){
			$reaName = $_POST['trueName'];
			$sex = $_POST['sex'];
			$phone = $_POST['mobile'];
			$email = $_POST['email'];
			$intr = $_POST['intro'];
			$map['real_name']=trim($reaName);
			$map['sex']=trim($sex);
			$map['phone']=trim($phone);
			$map['email']=trim($email);
			$map['intr']=trim($intr);
			$conditon['id'] = $_SESSION ['UID'];
			$result = $user->where($conditon)->save($map);
			if($result){
				$msg = '提交成功';
			}else{
				$msg = '提交失败';
			}
			$this->ajaxReturn($msg,'JSON');
		}
		else{
			$data = $user->getUser($_SESSION ['UID']);
			$this->assign('userData',$data);
			$this->display ();
		}
	}
	
	/*
	 * 修改密码 
	 * */
	public function modifyPSW() {
		if (IS_POST) {
			$user = M ( 'user' );
			$oldPassword = $_POST ['oldPassword'];
			$newPassword = $_POST ['newPassword'];
			if ($newPassword == $oldPassword) {
				$msg = '修改密码不能与原始密码一致';
			} else {
				if (UserController::checkOldPassword ( $oldPassword )) {
					$condition = array (
							'usr_name' => session ( "cur_user" ) 
					);
					$data = array (
							'password' => md5 ( $_POST ['newPassword'] ) 
					);
					$user->create ( $data );
					$result = $user->where ( $condition )->save ( $data );
					if ($result) {
						$msg = '修改密码成功';
					} else {
						$msg = '修改密码失败';
					}
				} else {
					$msg = '原始密码输入错误';
				}
			}
			
			$this->ajaxReturn ( $msg, 'json' );
		} else {
			$this->display ();
		}
	}
	/*
	 * 判断原始密码是否填写正确
	 * */
	public function checkOldPassword($oldPassword) {
		$user = M ( 'user' );
		$condition = array (
				'usr_name' => session ( "cur_user" ),
				'password' => md5 ( $oldPassword ) 
		);
		$result = $user->where ( $condition )->find ();
		if ($result) {
			return true;
		}
		return false;
	}
}