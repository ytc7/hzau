<?php
	class AddAction extends Action{
		public function show(){
			$this->display();
		}
		public function addnews(){
			$this->display();
		}
		//检查公告是否添加过
		public function checkInformation(){
			$title=$_GET['title'];
			$information=M('information');
			$where['title']=$title;
			$count=$information->where($where)->count();
			if($count){
				echo '不允许';
			}else{
				echo '允许';
			}
		}
		//添加公告
		public function doAddInformation(){
			$title=$_POST['title'];
			$con=$_POST['con'];
			$information=M('information');
			
			$data['title']=$title;
			$data['con']=$con;
			$lastId=$information->add($data);
			
			if($lastId){
				$this->redirect('Add/addnews');
			}else{
				$this->error('添加公告失败');
			}
		}
		//显示公告
		public function shownews(){
			//提取数据
			$information=M('information');
			
			import('ORG.Util.Page');// 导入分页类
		    $count=$information->count();//获取数据的总数
		    $page  = new Page($count,2);

		    $page->setConfig('header','条信息');
		    $show=$page->show();//返回分页信息
		
			$arr=$information->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list',$arr);
			$this->assign('show',$show);
			$this->display();
		}
}
?>