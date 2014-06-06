<?php

class AnnouncementsController extends AdminAppController {
  
  public function index() {
    $data = $this->Announcement->find('all');

    $this->set('data', $data);
  }

  public function view($slug) {
    if ($data = $this->Announcement->findBySlug($slug)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Announcement not found.', 'error');
      $this->redirect('index');
    }
  }

  public function edit($id) {
    if ($this->request->is('post')) {

    }

    if ($data = $this->Announcement->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Announcement not found.', 'error');
      $this->redirect('index');
    }
  }

  public function add() {
    
  }

  public function delete() {

  }

  public function beforeRender() {
    $this->set('page', 'announcements');
  }

}