<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    
	public function lst(){
		$cate = D('category');
		$cateres = $cate->order('id asc')->select();
		$this->assign('cateres',$cateres);
        $this->display();
	}

	public function add(){
		$cate = D('category');
		if (IS_POST) {
			
			$data['catename'] = I('catename');
			
			if ($cate->create($data)) {
				if ($cate->add()) {
					$this->success('Insert New Catagory Success!',U('lst'));
				} else {
					$this->error('Failed Insert New Catagory');
				}
			} else {
				$this->error($cate->getError());
			}

			return;
		}
        $this->display();
	}

	public function edit(){
		$cate = D('category');

		if (IS_POST) {
			$data['catename'] = I('catename');
			$data['id'] = I('id');
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
	
		$cates = $cate->find(I('id'));
		$this->assign('cates',$cates);
        $this->display();
	}
	
	public function del(){
		$cate = D('category');
		if ($cate->delete(I('id'))) {
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