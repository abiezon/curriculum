<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

    public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('logout'); // Letting users register themselves
	}

	public function login() {
		$this->layout = 'layout_login';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'),'msg-error');
	        }
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

    public function index() {
        $this->User->recursive = 0;
		$this->layout = 'layout';
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
		$this->layout = 'layout';
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'),'msg-ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'),'msg-error');
            }
        }
    }

    public function edit($id = null) {
		$this->layout = 'layout';
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'),'msg-ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'),'msg-error');
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		if($this->User->id != $this->Auth->user('id')):
        	if ($this->User->delete()) {
	            $this->Session->setFlash(__('User deleted'),'msg-ok');
	            $this->redirect(array('action' => 'index'));
	        }
		endif;	
        $this->Session->setFlash(__('User was not deleted'),'msg-error');
        $this->redirect(array('action' => 'index'));
    }
}