<?php
App::uses('AppController', 'Controller');
/**
 * Capabilities Controller
 *
 * @property Capabilitie $Capabilitie
 */
class CapabilitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $this->layout = "layout";
		$this->Capabilitie->recursive = 0;
		$this->set('capabilities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Capabilitie->id = $id;
		$this->layout = 'layout'; 
		if (!$this->Capabilitie->exists()) {
			throw new NotFoundException(__('Invalid capabilitie'));
		}
		$this->set('capabilitie', $this->Capabilitie->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    $this->layout = 'layout'; 
		if ($this->request->is('post')) {
			$this->Capabilitie->create();
			if ($this->Capabilitie->save($this->request->data)) {
				$this->Session->setFlash(__('Capacitação salva com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Capacitação não pode ser salva. Por favor, tente novamente.'),'msg-error');
			}
		}
		$types = $this->Capabilitie->CapabicityType->find('list');
		$employees = $this->Capabilitie->Employee->find('list');
		$this->set(compact('types', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Capabilitie->id = $id;
		$this->layout = 'layout'; 
		if (!$this->Capabilitie->exists()) {
			throw new NotFoundException(__('Invalid capabilitie'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Capabilitie->save($this->request->data)) {
				$this->Session->setFlash(__('Capacitação salva com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Capacitação não pode ser salva. Por favor, tente novamente.'),'msg-error');
			}
		} else {
			$this->request->data = $this->Capabilitie->read(null, $id);
		}
		$types = $this->Capabilitie->CapabicityType->find('list');
        // $employees = $this->Capabilitie->Employee->find('list');
        // $this->set(compact('types', 'employees'));
		$this->set(compact('types'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Capabilitie->id = $id;
		if (!$this->Capabilitie->exists()) {
			throw new NotFoundException(__('Invalid capabilitie'));
		}
		if ($this->Capabilitie->delete()) {
			$this->Session->setFlash(__('Capacitação excluída com sucesso!'),'msg-ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Capacitação não pode ser excluída'),'msg-error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function enrollment($id = null){
	     $this->layout = 'layout';
	     $this->Capabilitie->id = $id;
	      
	     if ($this->request->is('post') || $this->request->is('put')) {
	       //debug($this->request->data);die();	       
   			if ($this->Capabilitie->EmployeeCapabilitie->save($this->request->data)) {
   				$this->Session->setFlash(__('The capabilitie has been saved'));
   				$this->redirect(array('action' => 'index'));
   			} else {
   				$this->Session->setFlash(__('The capabilitie could not be saved. Please, try again.'));
   			}
   		} else {
   			$this->request->data = $this->Capabilitie->read(null, $id);
   		}
	     
	     $capacity = $this->Capabilitie->find('all',array('conditions'=>array('Capabilitie.id'=>$id),'recursive'=>0));	     
	     $employees = $this->Capabilitie->Employee->find('list');	  
	     $this->set(compact('employees','capacity'));
	}
	
}
