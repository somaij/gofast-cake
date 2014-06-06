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

    if ($this->request->is('post')) {
      $this->Job->id = $id;

      if ($this->Job->save($this->request->data)) {
        $this->Session->setFlash('Job posting successfully edited.', 'message');
      } else {
        $this->Session->setFlash('Job posting could not be edited.', 'error');
      }
    }

    if ($data = $this->Job->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Job posting not found.', 'error');
      $this->redirect('index');
    }
  }

  public function add() {
    
  }

  public function delete($id) {

    if ($this->Job->delete($id)) {
      $this->Session->setFlash('Job posting was successfully deleted.', 'message');
    } else {
      $this->Session->setFlash('Job posting could not be deleted.', 'error');
    }
    $this->redirect('index');

  }

  public function beforeRender() {
    $this->set('page', 'jobs');
  }

}