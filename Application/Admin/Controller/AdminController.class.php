<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    
	public function lst(){
		$admin = D('admin');
		$count = $admin->count();
		$page = new \Think\Page($count,3);
		$show = $page->show();
		$admins = $admin->order('id asc')->limit($page->firstRow.','.$page->listRows)->select();
		//$articleres = $article->order('id asc')->select();
		$this->assign('admins',$admins);
		$this->assign('page',$show);
        $this->display();
	}

	public function add(){
		$admin = D('admin');
		if (IS_POST) {
			
			$data['username'] = I('username');
			$data['password'] =md5(I('password'));
		
			if ($admin->create($data)) {
				if ($admin->add()) {
					$this->success('Insert New Admin Success!',U('lst'));
				} else {
					$this->error('Failed Insert New Admin');
				}
			} else {
				$this->error($admin->getError());
			}

			return;
		}
        $this->display();
	}

	public function edit(){
		$admin = D('admin');
		
		if (IS_POST) {
			$data['username'] = I('username');
			$data['id'] = I('id');
			//IF password is empty keep the original password,else changed the password 
			$admin_s = $admin->find($data['id']);
			//dump($admin_s);die;
			$password_tmp = $admin_s['password'];
			if (I('password')) {
				$data['password'] = md5(I('password'));
			} else {
				$data['password'] = $password_tmp;
			}

			if ($cate->create($data)) {
				if ($cate->save()) {
					$this->success('Edit Catagory Success!',U('lst'));
				} else {
					$this->error('Failed Edit Catagory');
				}
			} else {
				$this->error($cate->getError());
			}
			return;
		}
		$admins = $admin->find(I('id'));
		$this->assign('admins',$admins);
        $this->display();
	}
	
	public function del(){
		$admin = D('admin');
		if ($admin->delete(I('id'))) {
			$this->success('Delete Success',U('lst'));
		} else {
			$this->error('Delete Failed');
		}
        $this->display();
	}

	public function sort() {
		 $cate=D('category');
        foreach ($_POST as $id => $sort) {
            $cate->where(array('id'=>$id))->setField('catesort',$sort);
        }
		
        $this->success('Order Success',U('lst'));
	}
}