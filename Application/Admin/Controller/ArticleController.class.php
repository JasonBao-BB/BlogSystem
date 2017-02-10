<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    
	public function lst(){
		$article = D('ArticleView');
		$count = $article->count();
		$page = new \Think\Page($count,2);
		$show = $page->show();
		$articleres = $article->order('id asc')->limit($page->firstRow.','.$page->listRows)->select();
		//$articleres = $article->order('id asc')->select();
		$this->assign('articleres',$articleres);
		$this->assign('page',$show);
        $this->display();
	}
// array(5) {
//   ["name"] => string(12) "IMG_3527.JPG"
//   ["type"] => string(10) "image/jpeg"
//   ["tmp_name"] => string(22) "C:\Windows\phpC087.tmp"
//   ["error"] => int(0)
//   ["size"] => int(1327863)
// }
	public function add(){
		$article = D('article');
		if (IS_POST) {
			$data['title'] = I('title');
			$data['article_desc'] = I('article_desc');
			$data['content'] = I('content');
			$data['cateid'] = I('cateid');
			$data['time'] = time();
			//Uploads the file
			if ($_FILES['pic']['tmp_name'] != '') {
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     './'; // 设置附件上传根目录
    			$upload->savePath  =     '/Public/Uploads/'; // 设置附件上传（子）目录
    			$info   =   $upload->uploadOne($_FILES['pic']);

    			if (!$info) {
    				$this->error($upload->getError());
    			} else {
    				//dump($info);
    				$data['pic'] = $info['savepath'].$info['savename'];
    				//dump($data); die;
    			}

			}

			if ($article->create($data)) {
				if ($article->add()) {
					$this->success('Insert New article Success!',U('lst'));
				} else {
					$this->error('Failed Insert New article');
				}
			} else {
				$this->error($article->getError());
			}

			return;
		}	
		$cateres = D('category')->select();
		$this->assign('cateres',$cateres);
        $this->display();
	}

	public function edit(){
		$article = D('article');

		if (IS_POST) {

			$data['title'] = I('title');
			$data['article_desc'] = I('article_desc');
			$data['pic'] = I('pic');
			$data['content'] = I('content');
			$data['cateid'] = I('cateid');
			$data['id'] = I('id');
			$data['time'] = time();
			// Recheck new file uploads or not
			if ($_FILES['pic']['tmp_name'] != '') {

				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     './'; // 设置附件上传根目录
    			$upload->savePath  =     './Public/Uploads/'; // 设置附件上传（子）目录
    			$info   =   $upload->uploadOne($_FILES['pic']);
    			if (!$info) {
    				$this->error($upload->getError());
    			} else {
    				//dump($info);
    				$data['pic'] = $info['savepath'].$info['savename'];
    				//dump($data); die;
    			}

			}
			//verified the data and update the data
			if ($article->create($data)) {
				if ($article->save()) {
					$this->success('Edit article Success!',U('lst'));
				} else {
					$this->error('Failed Edit article');
				}
			} else {
				$this->error($article->getError());
			}
			return;
		}
		//assign the data to the webpage
		$articles = $article->find(I('id'));
		$cateres = D('category')->select();
		$this->assign('cateres',$cateres);
		$this->assign('articles',$articles);
        $this->display();
	}
	
	public function del(){
		$article = D('article');
		if ($article->delete(I('id'))) {
			$this->success('Delete Success',U('lst'));
		} else {
			$this->error('Delete Failed');
		}
        //$this->display();
        //return;
	}

	// public function sort() {
	// 	 $cate=D('category');
 //        foreach ($_POST as $id => $sort) {
 //            $cate->where(array('id'=>$id))->setField('catesort',$sort);
 //        }
		
 //        $this->success('Order Success',U('lst'));
	// }
}