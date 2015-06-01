<?php

namespace Home\Controller;

use Think\Controller;

class ColumnController extends Controller {
	public function _initialize() {
		if (session ( "cur_user" ) == '' || session ( "cur_user" ) == null) {
			$this->redirect ( '/member/login' );
		}
	}
	public function index() {
		$this->display ();
	}
	public function publish() {
		if (IS_POST) {
			$article = M ( 'article' );
			$msg = '';
			$data = array (
					'usr_id' => $_SESSION ['UID'],
					'title' => trim ( $_POST ['title'] ),
					'summary' => trim ( $_POST ['summary'] ),
					'source' => trim ( $_POST ['source'] ),
					'type' => trim ( $_POST ['type'] ),
					'link' => trim ( $_POST ['link'] ),
					'content' => trim ( $_POST ['content'] ) 
			);
			$article->create ( $data );
			$result = $article->add ( $data );
			if ($result) {
				$msg = '文章提交成功';
			} else {
				$msg = '文章提交失败';
			}
			$this->assign ( 'msg', $msg );
			$this->assign ( 'url', 'column/lists' );
			$this->display( 'public/info' );
		} else {
			$this->display ();
		}
	}
	public function lists() {
		$article = D ( 'article' );
		$list = $article->getArticleList ( '', $_SESSION ['UID'] );
		$this->assign ( 'articleList', $list );
		$this->display ();
	}
}