<?php

class JobsController extends AppController {
  public function index() {
    $this->render('jobs');
  }

  public function beforeRender() {
    $this->set('page', 'jobs');
  }
}