<?php
App::uses('AppController', 'Controller');
/**
 * PersonalReferrais Controller
 *
 * @property PersonalReferral $PersonalReferral
 */
class PersonalReferraisController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalReferral->recursive = 0;
		$this->set('personalReferrais', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonalReferral->id = $id;
		$this->layout = "layout"; 
		if (!$this->PersonalReferral->exists()) {
			throw new NotFoundException(__('Invalid personal referral'));
		}
		$this->set('personalReferral', $this->PersonalReferral->read(null, $id));
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
			$this->PersonalReferral->create();
			if ($this->PersonalReferral->save($this->request->data)) {
				$this->Session->setFlash(__('Referência Pessoal salva com sucesso'),'msg-ok');
			    $this->redirect(array('controller'=>'candidates','action'=>'view',$idCandidate));				
				
			} else {
				$this->Session->setFlash(__('Erro ao salvar referência pessoal. Por favor, tente novamente.'),'msg-error');
			}
		}
	   $candidates = $this->PersonalReferral->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
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
		$this->PersonalReferral->id = $id;
		$idCandidate = $this->Session->read('candidate_id');
		$this->layout = "layout";
		if (!$this->PersonalReferral->exists()) {
			throw new NotFoundException(__('Invalid personal referral'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalReferral->save($this->request->data)) {
				$this->Session->setFlash(__('Referência Pessoal salva com sucesso'),'msg-ok');
			    $this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
			} else {
				 $this->Session->setFlash(__('Erro ao salvar referência pessoal. Por favor, tente novamente.'),'msg-error');
			}
		} else {
			$this->request->data = $this->PersonalReferral->read(null, $id);
		}
		$candidates = $this->PersonalReferral->Candidate->find('list',array('conditions'=>array('Candidate.id'=>$idCandidate)));
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
		$this->PersonalReferral->id = $id;
		$idCandidate = $this->Session->read('candidate_id'); 
		if (!$this->PersonalReferral->exists()) {
			throw new NotFoundException(__('Referência Pessoal Inválida'));
		}
		if ($this->PersonalReferral->delete()) {
			$this->Session->setFlash(__('Referência Pessoal apagada com sucesso!'),'msg-ok');
			$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
		}
		$this->Session->setFlash(__('Erro ao apagar a referência pessaol'),'msg-error');
		$this->redirect(array('controller'=>'candidates','action' => 'view',$idCandidate));
	}
}
