<?php
App::uses('AppController', 'Controller');
/**
 * Candidates Controller
 *
 * @property Candidate $Candidate
 */
class CandidatesController extends AppController {

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
		// $this->Session->destroy();
		$this->Session->delete('candidate_id');
		// $this->Session->write('candidate_id' ,'');
		$this->Candidate->recursive = 0;
		$this->paginate = array('conditions' => $this->Candidate->parseCriteria($this->passedArgs));		    
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
		$this->layout = 'layout';
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
		$this->layout = 'layout';
		if ($this->request->is('post')) {
			$this->Candidate->create();
             
			if ($this->Candidate->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Candidato salvo com sucesso! Você pode continuar editando este candidato.'),'msg-ok');
                $this->redirect(array('action' => 'view', $this->Candidate->id));
                $this->Session->write('candidate_id' ,$this->Candidate->id);
				// $this->redirect(array('controller'=>'experiences','action'=>'add', 'candidate'=>$this->Candidate->id));
                // $this->redirect(array('controller'=>'experiences','action'=>'add'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'),'msg-error');
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
		$this->layout = 'layout';
		$this->Candidate->id = $id;
		if (!$this->Candidate->exists()) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		    $this->request->data['Candidate']['phone'] = str_replace("-","",str_replace("(","",str_replace(")","",$this->request->data['Candidate']['phone'])));
		            
			if ($this->Candidate->save($this->request->data)) {
				$this->Session->setFlash(__('The candidate has been saved'),'msg-ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'),'msg-error');
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
	
	// public function isAuthorized($user) {
	//     // All registered users can add posts
	//     if ($this->action === 'add' || $this->action === 'index' || $this->action === 'view') {
	//         return true;
	//     }
	// 
	//     // The owner of a post can edit and delete it
	//     if (in_array($this->action, array('edit', 'delete'))) {
	//         $candidateId = $this->request->params['pass'][0];
	//         if ($this->Candidate->isOwnedBy($candidateId, $user['id'])) {
	//             return true;
	//         }
	//     }// ver se todos poderão editar
	// 
	//     return parent::isAuthorized($user);
	// }
}
