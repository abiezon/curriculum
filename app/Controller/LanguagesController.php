<?php
App::uses('AppController', 'Controller');
/**
 * Languages Controller
 *
 * @property Language $Language
 */
class LanguagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout';
		$this->Language->recursive = 0;
		$this->set('languages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Language->id = $id;
		$this->layout = 'layout';
		if (!$this->Language->exists()) {
			throw new NotFoundException(__('Invalid language'));
		}
		$this->set('language', $this->Language->read(null, $id));
		$this->set('idCandidate', $this->Session->read('candidate_id'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($continue = null) {
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = 'layout';	
		if ($this->request->is('post')) {
			$this->Language->create();
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The language has been saved!'),'msg-ok');
				$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('The language could not be saved. Please, try again.'),'msg-error');
			}
		}
		$candidates = $this->Language->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
		$this->set(compact('candidates','idCandidate','continue'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Language->id = $id;
		$this->layout = 'layout';
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Language->exists()) {
			throw new NotFoundException(__('Invalid language'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The language has been saved'),'msg-ok');
				$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('The language could not be saved. Please, try again.'),'msg-error');
			}
		} else {
			$this->request->data = $this->Language->read(null, $id);
		}
		$candidates = $this->Language->Candidate->find('list');
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
		$this->Language->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Language->exists()) {
			throw new NotFoundException(__('Invalid language'));
		}
		if ($this->Language->delete()) {
			$this->Session->setFlash(__('Language deleted'),'msg-ok');
			$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
		}
		$this->Session->setFlash(__('Language was not deleted'),'msg-error');
		$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
	}
}
