<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
        $this->Auth->allow('index', 'view');
    }
    
    public function beforeRender() {
//        $this->set('test', 'blabla');       
        if ($this->Auth->login()) : 
//            echo "je suis loggué";
//            echo $this->Auth->user('username');
        endif;
    }
}