<?php

class AdminAppController extends AppController {
  public $components = array(
    'Session',
    'Auth' => array(
        'loginAction' => array(
            'controller' => 'admin',
            'action' => 'login'
          ),

        'loginRedirect' => array(
            'controller' => 'admin',
            'action' => 'index'
          ),

        'logoutRedirect' => array(
            'controller' => 'home',
            'action' => 'index'
          ),

        'authenticate' => array(
            'Form' => array(
              'passwordHasher' => 'Blowfish'
            )
          )
      )
    );

  public function beforeFilter() {
    $this->Auth->allow('login');
  }
}