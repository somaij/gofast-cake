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
      return $this->redirect('index');
    }
  }

  public function edit($id) {
    if ($this->request->is('post')) {
      $this->Announcement->id = $id;
      
      if ($this->Announcement->save($this->request->data)) {
        $this->Session->setFlash('Announcement has been successfully edited.', 'message');
      } else {
        // Record was not updated
        $this->Session->setFlash('Announcement could not be edited.', 'error');
      }
    }

    if ($data = $this->Announcement->findById($id)) {
      $this->set('data', $data);
    } else {
      $this->Session->setFlash('Announcement not found.', 'error');
      return $this->redirect('index');
    }
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Announcement->create();

      if ($this->Announcement->save($this->request->data)) {
        $this->Session->setFlash('Announcement successfully created.', 'message');
        return $this->redirect('index');
      }
      $this->Session->setFlash('Announcement could not be created.', 'error');
    }
  }

  public function delete($id) {
    if ($this->Announcement->delete($id)) {
      $this->Session->setFlash('Announcement was successfully deleted.', 'message');
    } else {
      $this->Session->setFlash('Announcement could not be deleted.', 'error');
    }

    return $this->redirect('index');
  }

  public function beforeRender() {
    $this->set('page', 'announcements');
  }

}