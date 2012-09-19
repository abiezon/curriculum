<?php
App::uses('AppController', 'Controller');
/**
 * Candidates Controller
 *
 * @property Candidate $Candidate
 */
class CandidatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Session->destroy();
		$this->Candidate->recursive = 0;
		$this->set('candidates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Candidate->id = $id;
		if (!$this->Candidate->exists()) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		$this->Session->write('candidate_id' ,$this->Candidate->id);
		$this->set('candidate', $this->Candidate->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Candidate->create();
			// debug($this->request->data);die();
			if ($this->Candidate->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The candidate has been saved'));
				// $this->redirect(array('action' => 'index'));
				$this->Session->write('candidate_id' ,$this->Candidate->id);
				// $this->redirect(array('controller'=>'experiences','action'=>'add', 'candidate'=>$this->Candidate->id));
				$this->redirect(array('controller'=>'experiences','action'=>'add'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Candidate->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Candidate->id = $id;
		if (!$this->Candidate->exists()) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Candidate->save($this->request->data)) {
				$this->Session->setFlash(__('The candidate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Candidate->read(null, $id);
		}
		$roles = $this->Candidate->Role->find('list');
		$this->set(compact('roles'));
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
		$this->Candidate->id = $id;
		if (!$this->Candidate->exists()) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		if ($this->Candidate->delete()) {
			$this->Session->setFlash(__('Candidate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
