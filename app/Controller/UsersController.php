<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    
     

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$post = $this->request->data['User'];
                        
                        $errors = false;
                        
                        if (!$post['confirm_creation'] && !$errors) {
                            $errors = true;
                            $this->User->validationErrors['confirm_creation'] = "Confirmer la création de votre compte pour valider ce formulaire.";
                        }
                        
                        if ($post['username'] != $post['cusername']) {
                            $errors = true;
                            $this->User->validationErrors['cusername'] = "Les deux adresses mails ne correspondent pas.";
                        }
                    
                        if ($post['password'] != $post['cpassword']) {
                            $errors = true;
                            $this->User->validationErrors['cpassword'] = "Les deux mots de passe ne correspondent pas.";
                        }
                        
                        
                    
                        if (!$errors) {
                            $this->User->create();
                            if ($this->User->save($this->request->data)) {
                                    App::uses('CakeEmail', 'Network/Email');
                                    $email = new CakeEmail();
                                    $email->from(array('golf3gtiii@hotmail.com' => 'Ma pause déj'))
                                        ->to($post['username'])
                                        ->subject('Veuillez confirmer votre inscription')
                                        ->send('Bonjour,<br/>Veuilez cliquer sur le lien ci-dessous pour valider votre compte. 
                                            <a href="http://mapausedej.localhost:8888/users/confirm">Ici</a>');
                                
                                    $this->Session->setFlash(__('Merci pour votre inscription. Un mail de confirmation vous a été envoyé.'));
                                    $this->redirect(array('action' => 'add'));
                            } else {
                                    $this->Session->setFlash(__('Erreur. Réessayer !'));
                            }
                        }
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
