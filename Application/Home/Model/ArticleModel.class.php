<?php
namespace Home\Model;

use Think\Model;

class ArticleModel extends Model {
	public function getArticleList($status = '', $uid = '') {
		$article = M ( 'article' );
		
		if ($uid != '') {
			$map ['usr_id'] = $uid;
		}
		if ($status != '') {
			$map ['status'] = $status;
		}
		$list = $article->where ( $map )->select ();
		return $list;
	}
	public function getArticleById($id='') {
		$article = M ( 'article' );
		$user = M ( 'user' );
	
		$map['ac.id']=$id;
		$map['_string'] = 'sr.id=ac.usr_id';
		$detail = $article->table('ec_user sr,ec_article ac')->where ( $map )->field ( 'sr.usr_name,sr.nick_name,ac.*' )->find ();
		return $detail;
	}
}

