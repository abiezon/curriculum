<?php
App::uses('AppController', 'Controller');
/**
 * CapabicityTypes Controller
 *
 * @property CapabicityType $CapabicityType
 */
class CapabicityTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CapabicityType->recursive = 0;
		$this->layout = 'layout'; 
		$this->set('capabicityTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CapabicityType->id = $id;
		$this->layout = 'layout'; 
		if (!$this->CapabicityType->exists()) {
			throw new NotFoundException(__('Invalid capabicity type'));
		}
		$this->set('capabicityType', $this->CapabicityType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    $this->layout = 'layout'; 
		if ($this->request->is('post')) {
			$this->CapabicityType->create();
			if ($this->CapabicityType->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo de Capacitação salvo com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Tipo da Capacitação não pode ser salvo. Por favor, tente novamente.'),'msg-error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CapabicityType->id = $id;
		$this->layout = 'layout'; 
		if (!$this->CapabicityType->exists()) {
			throw new NotFoundException(__('Invalid capabicity type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CapabicityType->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo de Capacitação salvo com sucesso!'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Tipo da Capacitação não pode ser salvo. Por favor, tente novamente.'),'msg-error'); 
			}
		} else {
			$this->request->data = $this->CapabicityType->read(null, $id);
		}
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
		$this->CapabicityType->id = $id;
		if (!$this->CapabicityType->exists()) {
			throw new NotFoundException(__('Invalid capabicity type'));
		}
		if ($this->CapabicityType->delete()) {
			$this->Session->setFlash(__('Tipo de Capacitação excluída!'),'msg-ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo de Capacitação não pode ser excluída'),'msg-error');
		$this->redirect(array('action' => 'index'));
	}
}
