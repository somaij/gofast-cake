<?php

class AnnouncementsController extends AdminAppController {
  
  public function index() {

  }

  public function view($slug) {
    if ($data = $this->Announcement->findBySlug($slug)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Announcement not found.', 'error');
      $this->redirect('index');
    }
  }

  public function edit() {

  }

  public function add() {
    
  }

  public function delete() {

  }

  public function beforeRender() {
    $this->set('page', 'announcements');
  }

}