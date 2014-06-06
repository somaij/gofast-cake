<?php

class AdminAppModel extends AppModel {

  protected function uniqueSlug($title, $id = null) {
    $slug = Inflector::slug($title, '-');
    $slug = substr($slug, 0, 54);
    $slug = strtolower($slug);

    $params = array(
      'conditions' => array($this->name.'.slug' => $slug),
      'fields' => array($this->name.'.id', $this->name.'.slug'));
    $i = rand(1000,9998);

    if (!is_null($id)) {
      $params['conditions']['not'] = array($this->name.'.id' => $id);
    }

    while (count($this->find('all', $params))) {
      $i++;
      $params['conditions'][$this->name.'.slug'] = $slug.'-'.$i;
    }

    $slug = $slug.'-'.$i;

    return $slug;
  }

}