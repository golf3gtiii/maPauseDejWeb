<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'authorize'      => array('controller'),
            'loginRedirect'  => array('controller' => 'pages', 'action' => 'display', 'membre' => false, 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'membre' => false, 'home'),
            'loginAction'    => array('controller' => 'pages', 'action' => 'display', 'membre' => false, 'home'),
            'authError' => 'Vous n\'êtes pas autorisé à accéder à cette ressource.',

            )
    );

    public function beforeFilter() {
//        $this->Auth->allow('index', 'view');
        $this->Auth->allow('display');
    }
    
    public function beforeRender() {
        $this->set('auth', $this->Auth);
        /*if ($this->Auth->login()) : 
            echo "test";
        endif;*/
    }

    public function isAuthorized($user) {
        

        //debug($this->request->params['membre']);
        if (isset($this->request->params['prefix'])) {
            if ($this->request->params['membre']) {
                return true;
            }
        }

        return false;
    }
}