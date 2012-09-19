<?php
App::uses('AppController', 'Controller');
/**
 * Experiences Controller
 *
 * @property Experience $Experience
 */
class ExperiencesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Experience->recursive = 0;
		$this->set('experiences', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		$this->set('experience', $this->Experience->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($continue = null) {
		$idCandidate = $this->Session->read('candidate_id');				
		if ($this->request->is('post')) {
			$this->Experience->create();
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'));
				// $this->redirect(array('action' => 'index'));
				if($continue):
					$this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));
				else:
					$this->redirect(array('controller'=>'acquirements','action'=>'add'));	
				endif;
				
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		}
		$candidates = $this->Experience->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
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
		$this->Experience->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved'));
				$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Experience->read(null, $id);
		}
		$candidates = $this->Experience->Candidate->find('list');
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
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->Experience->delete()) {
			$this->Session->setFlash(__('Experience deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Experience was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
