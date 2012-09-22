<?php
App::uses('AppController', 'Controller');
/**
 * Acquirements Controller
 *
 * @property Acquirement $Acquirement
 */
class AcquirementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout';
		$this->Acquirement->recursive = 0;
		$this->set('acquirements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Acquirement->id = $id;
		$this->layout = "layout";
		if (!$this->Acquirement->exists()) {
			throw new NotFoundException(__('Invalid acquirement'));
		}
		$this->set('acquirement', $this->Acquirement->read(null, $id));
		$this->set('idCandidate', $this->Session->read('candidate_id'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($continue = null) {
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = "layout";
		if ($this->request->is('post')) {
			$this->Acquirement->create();
			if ($this->Acquirement->save($this->request->data)) {
				$this->Session->setFlash(__('The acquirement has been saved'));
				// $this->redirect(array('action' => 'index'));
				if($continue):
					$this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));
				else:
					$this->redirect(array('controller'=>'courses','action'=>'add'));	
				endif;
					
			} else {
				$this->Session->setFlash(__('The acquirement could not be saved. Please, try again.'));
			}
		}
		$candidates = $this->Acquirement->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));		
		$this->set(compact('candidates','continue'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Acquirement->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = "layout";
		if (!$this->Acquirement->exists()) {
			throw new NotFoundException(__('Invalid acquirement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Acquirement->save($this->request->data)) {
				$this->Session->setFlash(__('The acquirement has been saved'));
				$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('The acquirement could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Acquirement->read(null, $id);
		}
		$candidates = $this->Acquirement->Candidate->find('list');
		$this->set(compact('candidates'));
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
		$this->Acquirement->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Acquirement->exists()) {
			throw new NotFoundException(__('Invalid acquirement'));
		}
		if ($this->Acquirement->delete()) {
			$this->Session->setFlash(__('Acquirement deleted'));
			$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
		}
		$this->Session->setFlash(__('Acquirement was not deleted'));
		$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
	}
}
