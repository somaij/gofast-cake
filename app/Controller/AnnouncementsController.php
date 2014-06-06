<?php

class AnnouncementsController extends AppController {
  public $components = array('Paginator');
  public $paginate = array(
        'fields' => array('Announcement.slug', 'Announcement.title', 'Announcement.created', 'Announcement.body'),
        'limit' => 15,
        'maxLimit' => 20,
        'order' => array(
            'Announcement.created' =>  'desc'
            )
        );
  
  public function index($slug = null) {
    $this->Paginator->settings = $this->paginate;
    $data = $this->Paginator->paginate('Announcement');
    $this->set('data', $data);
    $this->render('announcements');
  }

  public function view($slug) {
    if ($data = $this->Announcement->findBySlug($slug)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Announcement not found.', 'error');
      return $this->redirect('/announcements/');
    }
  }

}