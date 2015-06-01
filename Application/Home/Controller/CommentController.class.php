<?php

namespace Home\Controller;

use Think\Controller;

class CommentController extends Controller {
	public function addComment() {
		if ($_SESSION ['UID'] == '' || $_SESSION ['UID'] == null) {
			$msg = '请先登录';
		} else {
			if (IS_POST) {
				$comment = M ( 'comment' );
				$map ['article_id'] = I ( 'post.articleId' );
				$map ['reply_user_id'] = $_SESSION ['UID'];
				$map ['content'] = I ( 'post.commentContent' );
				
				$result = $comment->add ( $map );
				if ($result) {
					$msg = '添加评论成功';
				} else {
					$msg = '添加评论失败';
				}
			} else {
				$msg = '操作有错';
			}
		}
		$this->ajaxReturn ( $msg );
	}
	public function addCommentReply() {
		if ($_SESSION ['UID'] == '' || $_SESSION ['UID'] == null) {
			$msg = '请先登录';
		} else {
			if (IS_POST) {
				$comment = M ( 'comment' );
				
				$data['id'] = I ( 'post.repleyCommentId' );
				
				$temp = $comment->find($data['id']);
				
				$map ['reply_user_id'] = $_SESSION ['UID'];
				$map ['reply_father_id'] = I ( 'post.repleyCommentId' );
				$map ['article_id'] = $temp['article_id'];
				$map ['to_user_id'] = $temp['reply_user_id'];
				$map ['content'] = I ( 'post.responseContent' );
	
				$result = $comment->add ( $map );
				if ($result) {
					$msg = '回复成功';
				} else {
					$msg = '回复失败';
				}
			} else {
				$msg = '操作有错';
			}
		}
		$this->ajaxReturn ( $msg );
	}
}