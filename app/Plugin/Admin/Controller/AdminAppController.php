<?php

class AdminAppController extends AppController {
  public $components = array(
    'Session',
    'Auth' => array(
        'loginAction' => array(
            'controller' => 'admin',
            'action' => 'login'
          ),

        'loginRedirect' => 'index',

        'logoutRedirect' => array(
            'plugin' => null,
            'controller' => 'home',
            'action' => 'index'
          ),

        'authenticate' => array(
            'Form' => array(
              'userModel' => 'Admin.Admin',
              'passwordHasher' => 'Blowfish'
            )
          )
      )
    );

  public function beforeFilter() {
    $this->Auth->allow('login');
  }
}