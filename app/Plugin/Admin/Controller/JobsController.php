<?php

class JobsController extends AdminAppController {
  public $components = array('Paginator');
  public $paginate = array(
        'fields' => array('Job.id', 'Job.title', 'Job.post_date', 'Job.close_date', 'Job.description', 'Job.requirements'),
        'limit' => 15,
        'maxLimit' => 20,
        'order' => array(
            'Job.close_date' => 'desc'
            )
        );

  public function index() {
    $this->Paginator->settings = $this->paginate;
    $data = $this->Paginator->paginate('Job');
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