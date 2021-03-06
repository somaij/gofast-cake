<?php

class AdminController extends AdminAppController {

  public function beforeFilter() {
    parent::beforeFilter();
    // No longer needed once base administrator has been made.
    //$this->Auth->allow('add');
  }

  public function index() {
    $this->Admin->recursive = -1;
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Admin->create();
      if ($this->Admin->save($this->request->data)) {
        $this->Session->setFlash('Administrator has been created.', 'message');
        return $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash('The user could not be saved to the database. Please try again.', 'error');
      }
    }
  }

  public function login() {
    if ($this->request->is('post')) {
      if ($this->Auth->login()) {
        return $this->redirect($this->Auth->redirect());
      } else {
        $this->Session->setFlash('Invalid username or password. Try again.', 'error');
        $this->request->data['Admin']['password'] = '';
      }
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  public function beforeRender() {
    $this->set('page', 'home');
  }
}