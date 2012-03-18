<?php
App::uses('AppController', 'Controller');
/**
 * PlatsPhotos Controller
 *
 * @property PlatsPhoto $PlatsPhoto
 */
class PlatsPhotosController extends AppController {

    public $components = array('UploadHandler');
    
    
    
    
/**
 * index method
 *
 * @return void
 */
    public function index() {
        /*$this->PlatsPhoto->recursive = 0;
        $this->set('platsPhotos', $this->paginate());*/
        $upload_handler = $this->UploadHandler;

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'OPTIONS':
                break;
            case 'HEAD':
            case 'GET':
                $upload_handler->get();
                break;
            case 'POST':
                if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
                    $upload_handler->delete();
                } else {
                    $upload_handler->post();
                }
                break;
            case 'DELETE':
                $upload_handler->delete();
                break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }

        exit();
    }

/**
 * view method
 *
 * @param string $id
 * @return void
 */
    public function view($id = null) {
            $this->PlatsPhoto->id = $id;
            if (!$this->PlatsPhoto->exists()) {
                    throw new NotFoundException(__('Invalid plats photo'));
            }
            $this->set('platsPhoto', $this->PlatsPhoto->read(null, $id));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        $this->layout = 'ajax';
        
        if ($this->request->is('post')) {
                $this->PlatsPhoto->create();
                if ($this->PlatsPhoto->save($this->request->data)) {
                        $this->Session->setFlash(__('The plats photo has been saved'));
                        $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The plats photo could not be saved. Please, try again.'));
                }
        }
        //$plats = $this->PlatsPhoto->Plat->find('list');
        //$this->set(compact('plats'));
    }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
            $this->PlatsPhoto->id = $id;
            if (!$this->PlatsPhoto->exists()) {
                    throw new NotFoundException(__('Invalid plats photo'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                    if ($this->PlatsPhoto->save($this->request->data)) {
                            $this->Session->setFlash(__('The plats photo has been saved'));
                            $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The plats photo could not be saved. Please, try again.'));
                    }
            } else {
                    $this->request->data = $this->PlatsPhoto->read(null, $id);
            }
            $plats = $this->PlatsPhoto->Plat->find('list');
            $this->set(compact('plats'));
    }

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
    public function delete($fichier) {
        
        unlink(APP.WEBROOT_DIR.DS.'img/files/'.$fichier);
        unlink(APP.WEBROOT_DIR.DS.'img/thumbnails/'.$fichier);
        
        /*
        if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
            }
            $this->PlatsPhoto->id = $id;
            if (!$this->PlatsPhoto->exists()) {
                    throw new NotFoundException(__('Invalid plats photo'));
            }
            if ($this->PlatsPhoto->delete()) {
                    $this->Session->setFlash(__('Plats photo deleted'));
                    $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Plats photo was not deleted'));
            $this->redirect(array('action' => 'index'));

        }*/
        return true;
        
    }
}
