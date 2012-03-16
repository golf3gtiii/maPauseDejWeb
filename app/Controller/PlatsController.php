<?php
App::uses('AppController', 'Controller');
/**
 * Plats Controller
 *
 * @property Plat $Plat
 */
class PlatsController extends AppController {


    public $components = array('Upload');

    public function isAuthorized() {
        return true;
    }
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plat->recursive = 0;
		$this->set('plats', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Plat->id = $id;
		if (!$this->Plat->exists()) {
			throw new NotFoundException(__('Invalid plat'));
		}
		$this->set('plat', $this->Plat->read(null, $id));
	}
        
        

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plat->create();
			if ($this->Plat->save($this->request->data)) {
				$this->Session->setFlash(__('Le plat a été sauvegardé.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Une erreur s\'est produite lors de l\'enregistrement du plat. Veuillez réessayer.'));
			}
		}
		$cuisines = $this->Plat->Cuisine->find('list');
		$ingredients = $this->Plat->Ingredient->find('list');
		$formules = $this->Plat->Formule->find('list');
		$photos = $this->Plat->Photo->find('list');
		$this->set(compact('cuisines', 'ingredients', 'formules', 'photos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            $this->Plat->id = $id;
            if (!$this->Plat->exists()) {
                    throw new NotFoundException(__('Invalid plat'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {

                    /*echo "<pre>";
                        print_r($this->request->data);
                    echo "</pre>";*/

                   $this->Upload->upload($this->request->data['Photo'][0]['name'], $_SERVER['DOCUMENT_ROOT'].'/img/');

                    if ($this->Upload->_name) :
                        $this->request->data['Photo'][0]['name'] = $this->Upload->_name;                        endif;

                    if ($this->Plat->saveAssociated($this->request->data)) {

                            $this->Session->setFlash(__('Le plat a été sauvegardé'));
                            //$this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('Le plat ne peut pas être sauvegardé. Veuillez réessayer.'));
                    }
            } else {
                    $this->request->data = $this->Plat->read(null, $id);
            }
            $cuisines = $this->Plat->Cuisine->find('list');
            $ingredients = $this->Plat->Ingredient->find('list');
            $formules = $this->Plat->Formule->find('list');
            $photos = $this->Plat->Photo->find('list');
            $this->set(compact('cuisines', 'ingredients', 'formules', 'photos'));
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
		$this->Plat->id = $id;
		if (!$this->Plat->exists()) {
			throw new NotFoundException(__('Invalid plat'));
		}
		if ($this->Plat->delete()) {
			$this->Session->setFlash(__('Plat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
