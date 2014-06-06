<?php

class AdminController extends AdminAppController {

  public $uses = array('Admin.Admin');

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add');
  }

  public function index() {
    $this->Admin->recursive = -1;
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Admin->create();
      if ($this->Admin->save($this->request->data)) {
        $this->Session->setFlash('Administrator has been created.', 'message');
        return $this->redirect(array('action' => 'login'));
      }
      $this->Session->setFlash('The user could not be saved to the database. Please try again.', 'error');
    }
  }

  public function login() {
    if ($this->request->is('post')) {
      if ($this->Auth->login()) {
        return $this->redirect($this->Auth->redirect());
      }
      $this->Session->setFlash('Invalid username or password. Try again.', 'error');
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }
}