<?php
class AppController extends Controller {
    var $components = array('Auth','Acl','Session');
//    var $helpers = array('js'=>array('jquery'));

    function beforeFilter() {
        
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'sheets', 'action' => 'add');
        $this->set('loginuser',$this->Auth->user());
        
    }
}
?>
