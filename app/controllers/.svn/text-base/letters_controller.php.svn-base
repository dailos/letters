<?php
class LettersController extends AppController {

	var $name = 'Letters';
	var $components = array('PaginationRecall'); 
	
	function beforeFilter(){
		$this->Auth->allow('index','view','resetfilter');				
	}
	
	function index($locked = true) {		
		$this->Letter->recursive = 1;
		$datafilter = $this->Session->read('datafilter');		
		if($this->data['Letter']) {
			list($k,$v) = each($this->data['Letter']);	
			$datafilter[$k] = $v;
		}
		if(is_array($datafilter))
			foreach ($datafilter as $key => $value ){
				if($key == 'companyfilter' && $value)    $filter['CompaniesLetter.company_id']= $value;
				if($key == 'projectfilter' && $value)    $filter['LettersProject.project_id'] = $value;
				if($key == 'userfilter' && $value)       $filter['user_id'] = $value;
				if($key == 'situationfilter' && $value)  $filter['situation'] = $value ;		
				if($key == 'numberfilter' && $value)     $filter[] = " Letter.id like '%".$value."%' ";	
				if($key == 'reffilter' && $value)        $filter[] = " ref like '%".$value."%' ";	
				if($key == 'datefilter' && $value)       $filter[] = " date like '%".$value."%' ";			
				if($key == 'filenumberfilter' && $value) $filter[] = " filenumber like '%".$value."%' ";					
				if($key == 'subjectfilter' && $value)    $filter[] = " subject like '%".$value."%' ";	
			}
		$this->Session->write('datafilter',$datafilter);		 		
		if($locked) $filter['restricted'] = 0; 
		
		$this->Letter->bindModel(array('hasOne'=>array('CompaniesLetter')), false);
		$this->Letter->bindModel(array('hasOne'=>array('LettersProject')), false);
		$this->paginate = array('conditions' => $filter, 'order' => array('Letter.id' => 'desc'),'group'=>'Letter.id');
		$this->set('letters', $this->paginate('Letter',$filter));
		
		$companies = $this->Letter->Company->find('list',array('fields' => array('id', 'shortname')));
		$users = $this->Letter->User->find('list',array('fields' => array('initial')));
		$projects = $this->Letter->Project->find('list');
		$situations = array('1'=>'In','2'=>'Out');
		$this->set(compact('companies', 'users', 'projects','situations'));
		$this->set('filtered', $this->RequestHandler->isAjax());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid letter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('letter', $this->Letter->read(null, $id));
	}
	
	function resetfilter(){
		$this->Session->write('datafilter',null);
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_resetfilter(){
		$this->resetfilter();
	}
	
	function admin_index() {
		$this->index(false);
	}

	
	function admin_view($id = null) {
		$this->view($id);
	}
	
	
	function admin_add() {	
		if (!empty($this->data)) {	
			$this->Letter->create();
			if ($this->Letter->save($this->data)) {
				$this->Session->setFlash(__('The letter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The letter could not be saved. Please, try again.', true));
			}
		}		
		$companies = $this->Letter->Company->find('list');
		$user_id = $this->Auth->user('id');
		$projects = $this->Letter->Project->find('list');
		$this->set(compact('companies', 'user_id', 'projects'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {			
			$this->Session->setFlash(__('Invalid letter', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->Letter->save($this->data)) {																			
				$this->Session->setFlash(__('The letter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The letter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Letter->read(null, $id);									
			$companies = $this->Letter->Company->find('list');
			$projects = $this->Letter->Project->find('list');
			$this->set(compact('companies', 'projects'));
		}
	}
	
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for letter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Letter->delete($id)) {
			$this->Session->setFlash(__('Letter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Letter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
}
