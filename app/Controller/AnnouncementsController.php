<?php

class AnnouncementsController extends AppController {
  
  public function index($slug = null) {
    if ($slug === null) {
      $this->render('announcements');  
    } else {
      $data = $this->Announcement->findBySlug($slug);
      $this->set('data', $data);
      $this->render('view');
    }
    
  }

}