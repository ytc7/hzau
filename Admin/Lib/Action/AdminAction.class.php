<?php
// ������ϵͳ�Զ����ɣ�����������;
class AdminAction extends CommonAction {
	    public function admin(){
			
			$this->display();
	    }
	    public function top(){
		    $this->display();
	    }
	    public function left(){
		    if($_SESSION['class']==0)
		    {
				$this->redirect('Admin/leftzero');
			}
		    if($_SESSION['class']==1)
		    {
				$this->redirect('Admin/leftone');
			}
		}
	    /*public function right(){
		    $this->display();
	    }*/
}
?>