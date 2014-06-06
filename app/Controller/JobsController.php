<?php

class JobsController extends AppController {
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
    $this->render('jobs');
  }

  public function view($id) {
    if ($data = $this->Job->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Job posting not found.', 'error');
      return $this->redirect('/jobs/');
    }
  }

  public function beforeRender() {
    $this->set('page', 'jobs');
  }
}