<?php

class QuotesController extends AppController {
  public function index() {
    $this->render('quotes');
  }

  public function beforeRender() {
    $this->set('page', 'quotes');
  }
}