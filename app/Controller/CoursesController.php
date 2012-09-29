<?php
App::uses('AppController', 'Controller');
/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout';
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Course->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = 'layout';
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		$this->set('course', $this->Course->read(null, $id));
		$this->set('idCandidate',$idCandidate);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($continue = null) {
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = 'new';			
		if ($this->request->is('post')) {
			$this->Course->create();
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				// $this->redirect(array('action' => 'index'));
				if($continue):
					$this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));
				else:
					$this->redirect(array('controller'=>'languages','action'=>'add'));	
				endif;	
					
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		}
		$candidates = $this->Course->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
		$this->set(compact('candidates','continue','idCandidate'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Course->id = $id;
		$this->layout = 'layout';
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Course->read(null, $id);
		}
		$candidates = $this->Course->Candidate->find('list');
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
		$this->Course->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('Course deleted'));
			$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
		}
		$this->Session->setFlash(__('Course was not deleted'));
		$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
	}
}
