<?php

class Announcement extends AppModel {

  public function getThree() {
    $params = array(
        'fields' => array('Announcement.slug', 'Announcement.title', 'Announcement.body'),
        'order' => array('Announcement.created'),
        'limit' => 3
      );

    $result = $this->find('all', $params);
    return $result;
  }

}