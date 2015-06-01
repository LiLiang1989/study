<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$user = M ( 'user' );
		$data ['usr_name'] = session ( "cur_user" );
		$result = $user->where ( $data )->find ();
		$_SESSION ['UID']=$result['id'];
		$_SESSION ['tempUser']=$result;
    	$this->display();
    }
    
    public function login() {
    	if (IS_POST) {
    		$username = $_POST ['username'];
    		$password = $_POST ['password'];
    		if (IndexController::checkLogin ( $username, $password )) {
    			$_SESSION ['cur_user'] = $username; // 将登录用户名赋给SESSION变量
    			$msg = '登陆成功';
    		} else {
    			$msg = '登录失败！用户名或密码不正确';
    		}
    	} else {
    		$msg = '操作失败，请刷新后重试';
    	}
    
    	$this->ajaxReturn ( $msg, 'json' );
    }
    public function register() {
    	if (IS_POST) {
    		$userName = $_POST ['yhm'];
    		$password = $_POST ['mm'];
    		$nickName = $_POST ['nc'];
    		$intr = $_POST ['grjs'];
    		$v_code = $_POST ['yzm'];
    			
    		if (IndexController::check_verify ( $v_code, '' )) {
    			if (IndexController::is_exist_user ( $userName )) {
    				$msg = '用户名已存在！';
    			} else {
    				$user = M ( 'user' );
    				$data ['usr_name'] = $userName;
    				$data ['password'] = md5 ( $password );
    				$data ['nick_name'] = $nickName;
    				$data ['intr'] = $intr;
    				$user->create ( $data );
    				if ($user->add ( $data )) {
    					$_SESSION ['cur_user'] = $username; // 将登录用户名赋给SESSION变量
    					IndexController::get_user_id($userName);
    					$msg = '注册成功';
    				} else {
    					$msg = '注册失败';
    				}
    			}
    		} else {
    			$msg = '验证码错误';
    		}
    	} else {
    		$msg = '操作失败，请刷新重试';
    	}
    	$this->ajaxReturn ( $msg, 'json' );
    }
    public function logout() {
    	session ( 'cur_user', null );
    	session ( 'UID', null );
    	session ( 'tempUser', null );
    	$this->redirect ('/index');
    }
    // 登陆检查
    public function checkLogin($username, $password) {
    	$user = M ( 'user' );
    	$map ['usr_name'] = $username;
    	$map ['password'] = md5 ( $password );
    
    	$result = $user->where ( $map )->find ();
    	if ($result) {
    		$login = true;
    	} else {
    		$login = false;
    	}
    	return $login;
    }
    public function is_exist_user($userName) {
    	$flag = false;
    	$user = M ( 'user' );
    	$data ['usr_name'] = $userName;
    	$result = $user->where ( $data )->find ();
    	if ($result) {
    		$flag = true;
    	}
    	return $flag;
    }
    public function get_user_id($userName) {
    	$user = M ( 'user' );
    	$data ['usr_name'] = $userName;
    	$result = $user->where ( $data )->find ();
    	$_SESSION ['UID'] = $result['id']; // 将登录用户名赋给SESSION变量
    }
    public function verify() {
    	$config = array (
    			'fontSize' => 16, // 验证码字体大小
    			'length' => 4, // 验证码位数
    			'useNoise' => false
    	); // 关闭验证码杂点
    
    	$Verify = new \Think\Verify ( $config );
    	$Verify->codeSet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$Verify->entry ();
    }
    function check_verify($code, $id = '') {
    	$verify = new \Think\Verify ();
    	return $verify->check ( $code, $id );
    }
    
    
    public function page($id=0){
    	/* 标识正确性检测 */
    	if(!($id && is_numeric($id))){
    		$this->error('你所访问的页面缺少必要的参数');
    	}
    	$article =D('article');
    	$detail = $article->getArticleById($id);
    	if(!$detail){
    		$this->error('你所访问的内容不存在');
    	}
    	$this->assign('detail',$detail);
    	$this->assign('commentList',IndexController::getCommentListByArticleId($id));
    	$this->display();	
    }
    
    public function getCommentListByArticleId($article_id=0){
    	$comment = D('comment');
    	$list = $comment->getCommentsByArticleId($article_id);
    	return $list;
    }
}