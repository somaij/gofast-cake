<?php

class HomeController extends AppController {
  // Use the Announcement Model
  public $uses = array('Announcement');

  public function index() {
    $data = $this->Announcement->getThree();
    $this->set('data', $data);
    $this->set('page', 'home');
    $this->render('home');
  }

  public function about() {
    $this->set('page', 'about');
  }

}