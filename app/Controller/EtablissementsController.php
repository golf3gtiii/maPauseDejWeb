<?php
App::uses('AppController', 'Controller');
/**
 * Etablissements Controller
 *
 * @property Etablissement $Etablissement
 */
class EtablissementsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Etablissement->recursive = 0;
		$this->set('etablissements', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Etablissement->id = $id;
		if (!$this->Etablissement->exists()) {
			throw new NotFoundException(__('Invalid etablissement'));
		}
		$this->set('etablissement', $this->Etablissement->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function membre_add() {
		if ($this->request->is('post')) {
			$this->Etablissement->create();
			if ($this->Etablissement->save($this->request->data)) {
				$this->Session->setFlash(__('The etablissement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Un problème s\'est produit lors de l\'enregistrement. Veuillez réessayer.'));
			}
		}
		$formules = $this->Etablissement->Formule->find('list');
		$paiements = $this->Etablissement->Paiement->find('list');
		$this->set(compact('formules', 'paiements'));
		
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
public function membre_edit() {

	if ($this->request->is('post') || $this->request->is('put')) {
		if ($this->Etablissement->save($this->request->data)) {
			$this->Session->setFlash(__('The etablissement has been saved'));
			//$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The etablissement could not be saved. Please, try again.'));
		}
	} else {
		$etablissement = $this->Etablissement->find('first',
												array('conditions' => array('user_id' => AuthComponent::user('id')))
												);	
		if (!$etablissement) {
			$this->Etablissement->save(array('user_id' => AuthComponent::user('id')));
		}
		if ($etablissement) {
			$id = $etablissement['Etablissement']['id'];
		}
		if ($id) {
			$this->Etablissement->id = $id;
			if (!$this->Etablissement->exists()) {
				throw new NotFoundException(__('Invalid etablissement'));
			}
			$this->request->data = $this->Etablissement->read(null, $id);
		}
		
	}
	$formules = $this->Etablissement->Formule->find('all');
	$paiements = $this->Etablissement->Paiement->find('list');
	$this->set(compact('formules', 'paiements'));
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
		$this->Etablissement->id = $id;
		if (!$this->Etablissement->exists()) {
			throw new NotFoundException(__('Invalid etablissement'));
		}
		if ($this->Etablissement->delete()) {
			$this->Session->setFlash(__('Etablissement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etablissement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
}
