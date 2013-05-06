<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeCapabilities Controller
 *
 * @property EmployeeCapabilitie $EmployeeCapabilitie
 */
class EmployeeCapabilitiesController extends AppController {
  
/**
 * index method
 *
 * @return void
 */
	public function index($employee_id = null) { 
	  
	  if($employee_id == null) {
	      $this->EmployeeCapabilitie->recursive = 0;
  		  $this->layout = 'layout'; 
  		  $this->set('employeeCapabilities', $this->paginate());
	  }else{	      
  		  $this->paginate = array ('conditions'=>array('EmployeeCapabilitie.employee_id'=>$employee_id));
  		  $employeeCapabilities = $this->paginate('EmployeeCapabilitie');    		  
  		  $this->layout = 'layout';
  		  $this->set(compact('employeeCapabilities'));
	  }
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmployeeCapabilitie->id = $id;
		$this->layout = 'layout'; 
		if (!$this->EmployeeCapabilitie->exists()) {
			throw new NotFoundException(__('Invalid employee capabilitie'));
		}
		$this->set('employeeCapabilitie', $this->EmployeeCapabilitie->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($employee_id = null) {
	    $this->layout = 'layout'; 
		if ($this->request->is('post')) {
			$this->EmployeeCapabilitie->create();
		 // debug($this->request->data);die();
			if ($this->EmployeeCapabilitie->saveMany($this->request->data)) {
				$this->Session->setFlash(__('Inscrição realizada com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A inscrição não pode ser realizada. Por favor, tente novamente.'),'msg-error');
			}
		}
		 
		$employeeId = $employee_id;
		$employees = $this->EmployeeCapabilitie->Employee->find('list',array('conditions'=>array('Employee.id'=>$employee_id)));
		$capacitys = $this->EmployeeCapabilitie->Capabilitie->find('list');
		$this->set(compact('employees', 'capacitys','employeeId'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EmployeeCapabilitie->id = $id;
		$this->layout = 'layout'; 
		if (!$this->EmployeeCapabilitie->exists()) {
			throw new NotFoundException(__('Invalid employee capabilitie'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeeCapabilitie->save($this->request->data)) {
				$this->Session->setFlash(__('Inscrição realizada com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A inscrição não pode ser realizada. Por favor, tente novamente.'),'msg-error');
			}
		} else {
			$this->request->data = $this->EmployeeCapabilitie->read(null, $id);
		}
		$employees = $this->EmployeeCapabilitie->Employee->find('list');
		$capacitys = $this->EmployeeCapabilitie->Capabilitie->find('list');
		$this->set(compact('employees', 'capacitys'));
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
		$this->EmployeeCapabilitie->id = $id;
		if (!$this->EmployeeCapabilitie->exists()) {
			throw new NotFoundException(__('Invalid employee capabilitie'));
		}
		if ($this->EmployeeCapabilitie->delete()) {
			$this->Session->setFlash(__('Inscrição excluída com sucesso!'),'msg-ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A inscrição não pode ser excluída'),'msg-error');
		$this->redirect(array('action' => 'index'));
	} 
	
	public function enroll($capacitys_id = null){
	    $this->layout = 'layout';
	    
	    //$capacitys = $this->EmployeeCapabilitie->Capabilitie->findById($capacitys_id);
	   // $capacitys = $this->EmployeeCapabilitie->findByCapacityId($capacitys_id);
	    $this->paginate = $this->EmployeeCapabilitie->Employee->find('all');
	    debug($this->paginate); die();  
	    $this->set('employees',$this->paginate()); 
	    debug($employees); die();
	    
	}
}
