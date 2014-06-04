<?php

class AnnouncementsController extends AppController {
  
  public function index($slug = null) {
    $this->render('announcements');
  }

  public function view($slug) {
    if ($data = $this->Announcement->findBySlug($slug)) {
      $this->set('data', $data);
      $this->render('view');
    } else {
      $this->Session->setFlash('Announcement not found.');
      $this->redirect('index');
    }
  }

}