<?php

class AnnouncementsController extends AdminAppController {

  public $components = array('Paginator');
  public $paginate = array(
        'fields' => array('Announcement.id', 'Announcement.slug', 'Announcement.title', 'Announcement.created', 'Announcement.body'),
        'limit' => 15,
        'maxLimit' => 20,
        'order' => array(
            'Announcement.created' =>  'desc'
            )
        );
  
  public function index() {
    $this->Paginator->settings = $this->paginate;
    $data = $this->Paginator->paginate('Announcement');
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