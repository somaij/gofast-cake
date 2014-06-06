<?php

class AdminAppModel extends AppModel {

  protected function uniqueSlug($title, $id = null) {
    $slug = Inflector::slug($title, '-');
    $slug = substr($slug, 0, 54);
    $slug = strtolower($slug);

    $params = array(
      'conditions' => array($this->alias.'.slug' => $slug),
      'fields' => array($this->alias.'.id', $this->alias.'.slug'));
    $i = rand(1000,9998);

    if (!is_null($id)) {
      $params['conditions']['not'] = array($this->alias.'.id' => $id);
    }

    while (count($this->find('all', $params))) {
      $i++;
      $params['conditions'][$this->alias.'.slug'] = $slug.'-'.$i;
    }

    $slug = $slug.'-'.$i;

    return $slug;
  }

}