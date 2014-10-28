<?php

	Class IndexAction extends Action{
		
		Public function index(){
		    $this->display();
		}
		Public function handle_work(){	
            $da = array (
				'id' => I('id'),
				'action' => I('direction')
			);
			if($da['action']==1){//first 
				if(($da['id']%5) == 0){//second
				    if(M('work')->find($da['id']+1)==NULL){//third
					    $this->ajaxReturn(array('success'=>0),'json');
				    }else{
					   $data['success'] = 1;
				       for($i=0;$i<5;$i++){
				    	    if(M('work')->find($da['id']+$i+1)!=NULL){
				    		    $data['content'][$i]=M('work')->find($da['id']+$i+1);
				    	    } else {
				    	        break; 
				    	    }
				        }
				        $this->ajaxReturn($data,'json');
				    }
				} else if(($da['id']%5)<5){
				   $this->ajaxReturn(array('success'=>0),'json');	
				}
			} else if($da['action']==2){
				$data['success'] = 1;
				for($i=0;$i<5;$i++){
				    $data['content'][$i]=M('work')->find($da['id']+$i-5);
				}
				$this->ajaxReturn($data,'json');
			}	
		}
		Public function handle_about(){
			$da = array (
				'id' => I('changeId'),
				'action' => I('changeId2')
			);
			if($da['action']==1){//first 
				if(($da['id']%5) == 0){//second
				    if(M('family')->find($da['id']+1)==NULL){//third
					    $this->ajaxReturn(array('success'=>0),'json');
				    }else{
					    $data['success'] = 1;
				        for($i=0;$i<5;$i++){
				    	    if(M('family')->find($da['id']+$i+1)!=NULL){
				    		    $data['content'][$i]=M('family')->find($da['id']+$i+1);
				    	    } else {
				    	        break; 
				    	    }
				        }
				        $this->ajaxReturn($data,'json');
				    }
				} else if(($da['id']%5)<5){
				   $this->ajaxReturn(array('success'=>0),'json');	
				}
			} else if($da['action']==2){
				if($da['id']%5!=0){
					$data['success'] = 1;
				    for($i=0;$i<5;$i++){
				        $data['content'][$i]=M('family')->find($da['id']-$da['id']%5+$i-4);
				    }
				    $this->ajaxReturn($data,'json');
			    }else{
			    	$data['success'] = 1;
				    for($i=0;$i<5;$i++){
				        $data['content'][$i]=M('family')->find($da['id']+$i-9);
				    }
				    $this->ajaxReturn($data,'json');
			    }
			}	
		}
	}
?>