<?php
class AttachmentsController extends AppController {

	var $name = 'Attachments';
	
	function beforeFilter(){
		$this->Auth->allow('download');		
	}
	
	function admin_upload($letter_id = null){
		if (!empty($this->data)) {		
			if(is_uploaded_file($this->data['Attachment']['file']['tmp_name'])){			
				$path = WWW_ROOT.'files'.DS.$this->data['Attachment']['letter_id'].'_'.$this->data['Attachment']['file']['name'];												
				if(!move_uploaded_file($this->data['Attachment']['file']['tmp_name'],$path)){
					$this->Session->setFlash(__('Error while uploading the document', true));
					$this->redirect(array('controller' => 'letters','action' => 'index'));
				}else{ 												
					$this->data['Attachment']['path'] = $path;
					$this->Attachment->create();
					if ($this->Attachment->save($this->data)) {							
						$this->Session->setFlash(__('Document uploaded', true));
						$this->redirect(array('controller' => 'letters', 'action' => 'view',$this->data['Attachment']['letter_id'] ));	
					}
				}											
			}
			$this->Session->setFlash(__('Error while uploading the document', true));												
		}else{		
			$this->set('letter_id',$letter_id);
		}
	}
	
	function download ($id = null){		
		$letter = $this->Attachment->read(null,$id);	
		$path = $letter['Attachment']['path'];	
		$name = substr(strrchr($path, DS), 1);	
        header ("Content-Disposition: attachment;
				filename=".$name."\n\n");
        header ("Content-Type: application/octet-stream");
        header ("Content-Length: ".filesize($path));
        readfile($path);
		
	}
	
	function admin_download($id = null){
		$this->download($id);
	}
	
	function admin_delete ($id = null, $letter_id = null){
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for attachment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Attachment->delete($id)) {
			$this->Session->setFlash(__('Attachment deleted', true));
			$this->redirect(array('controller'=>'letters', 'action'=>'view', $letter_id));
		}
		$this->Session->setFlash(__('Attachment was not deleted', true));
		$this->redirect(array('controller'=>'letters', 'action'=>'view', $letter_id));
	}

}
