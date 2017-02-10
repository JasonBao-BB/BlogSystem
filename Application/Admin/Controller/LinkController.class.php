<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends Controller {
    
	public function lst(){
		$link = D('link');
		$count = $link->count();
		$page = new \Think\Page($count,2);
		$show = $page->show();
		$linkres = $link->order('id asc')->limit($page->firstRow.','.$page->listRows)->select();
		//$linkres = $link->order('id asc')->select();
		$this->assign('linkres',$linkres);
		$this->assign('page',$show);
        $this->display();
	}

	public function add(){
		$link = D('link');
		if (IS_POST) {
			
			$data['title'] = I('title');
			$data['url'] = I('url');
			$data['desc'] = I('desc');
			
			if ($link->create($data)) {
				if ($link->add()) {
					$this->success('Insert New Link Success!',U('lst'));
				} else {
					$this->error('Failed Insert New Link');
				}
			} else {
				$this->error($link->getError());
			}

			return;
		}
        $this->display();
	}

	public function edit(){
		$link = D('link');

		if (IS_POST) {
			$data['title'] = I('title');
			$data['url'] = I('url');
			$data['desc'] = I('desc');
			$data['id'] = I('id');
			if ($link->create($data)) {
				if ($link->save()) {
					$this->success('Edit Link Success!',U('lst'));
				} else {
					$this->error('Failed Edit Link');
				}
			} else {
				$this->error($link->getError());
			}
			return;
		}
		$links = $link->find(I('id'));
		$this->assign('links',$links);
        $this->display();
	}
	
	public function del(){
		$link = D('category');
		if ($link->delete(I('id'))) {
			$this->success('Delete Success',U('lst'));
		} else {
			$this->error('Delete Failed');
		}
        $this->display();
	}

	// public function sort() {
	// 	 $cate=D('category');
 //        foreach ($_POST as $id => $sort) {
 //            $cate->where(array('id'=>$id))->setField('catesort',$sort);
 //        }
		
 //        $this->success('Order Success',U('lst'));
	// }
}