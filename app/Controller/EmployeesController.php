<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 */
class EmployeesController extends AppController {
   
  public $components = array('Search.Prg');
  public $presetVars = array(
            array('field' => 'name', 'type' => 'value'),	    
          );
   public $helpers = array("Home",'Js' => array('Jquery'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
	  $this->Prg->commonProcess();
	  $this->layout = 'layout'; 
		$this->Employee->recursive = 0;
		$this->paginate = array('conditions' => $this->Employee->parseCriteria($this->passedArgs));
		$this->set('employees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	    $this->layout = "layout"; 
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() { 
	    $this->layout = "layout"; 
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('O funcionário foi salvo com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O funcionário não pode ser salvo. Por favor, tente novamente.'),'msg-error');
			}
		}
		$roleses = $this->Employee->Role->find('list');
		$this->set(compact('roleses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	    $this->layout = "layout"; 
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('O funcionário foi salvo com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O funcionário não pode ser salvo. Por favor, tente novamente.'),'msg-error');
			}
		} else {
			$this->request->data = $this->Employee->read(null, $id);
		}
		$roleses = $this->Employee->Role->find('list');
		$employee_id = $id;
		$this->set(compact('roleses','employee_id'));
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
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('Funcionário excluído com sucesso!'),'msg-ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O Funcionário não pode ser excluído'),'msg-error');
		$this->redirect(array('action' => 'index'));
	}
}
