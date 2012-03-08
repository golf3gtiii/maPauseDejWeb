<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'authorize' => array('Actions' => array('home' => 'pages')),
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            
        )
    );

    public function beforeFilter() {
//        $this->Auth->allow('index', 'view');
        $this->Auth->allow('display');
        $this->Auth->authorize = 'controller';
    }
    
    public function beforeRender() {
        $this->set('auth', $this->Auth);
        /*if ($this->Auth->login()) : 
            echo "test";
        endif;*/
    }
}