<?php

class JobsController extends AdminAppController {

  public function index() {
    $data = $this->Job->find('all');
    $this->set('data', $data);
  }

  public function view($id) {
    if ($data = $this->Job->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Job posting not found.', 'error');
      $this->redirect('index');
    }
  }

  public function edit($id) {
    if ($data = $this->Job->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Job posting not found.', 'error');
      $this->redirect('index');
    }
  }

  public function add() {
    
  }

  public function delete() {

  }

  public function beforeRender() {
    $this->set('page', 'jobs');
  }

}