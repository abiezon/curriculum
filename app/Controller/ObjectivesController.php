<?php
App::uses('AppController', 'Controller');
/**
 * Objectives Controller
 *
 * @property Objective $Objective
 */
class ObjectivesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Objective->recursive = 0;
		$this->set('objectives', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Objective->id = $id;
		$this->layout = "layout";
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		$this->set('objective', $this->Objective->read(null, $id));
		$this->set('idCandidate', $this->Session->read('candidate_id')); 
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    $idCandidate = $this->Session->read('candidate_id');	   
	    $this->layout = "layout";
		if ($this->request->is('post')) {
			$this->Objective->create();
			if ($this->Objective->save($this->request->data)) {
				$this->Session->setFlash(__('Objetivo salvo com sucesso'),'msg-ok');
			    $this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('Erro ao salvar objetivo. Por favor, tente novamente.'),'msg-error'); 
			}
		}
		$candidates = $this->Objective->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
		$this->set(compact('candidates','idCandidate'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Objective->id = $id;
		$idCandidate = $this->Session->read('candidate_id');	   
	    $this->layout = "layout";
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Objective->save($this->request->data)) {
				$this->Session->setFlash(__('Objetivo salvo com sucesso'),'msg-ok');
			    $this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('Erro ao salvar objetivo. Por favor, tente novamente.'),'msg-error'); 
			}
		} else {
			$this->request->data = $this->Objective->read(null, $id);
		}
		 $candidates = $this->Objective->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
		$this->set(compact('candidates','idCandidate'));
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
		$this->Objective->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Objetivo inválido'));
		}
		if ($this->Objective->delete()) {
			$this->Session->setFlash(__('Objetivo apagado com sucesso!'),'msg-ok');
			$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
		}
		$this->Session->setFlash(__('Erro ao apagar o objetivo'),'msg-error');
		$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
	}
}
