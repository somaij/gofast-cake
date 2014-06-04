<?php

class Announcement extends AppModel {
  public $validate = array(
      'title' => array(
          'notEmpty' => array(
                 'rule' => 'notEmpty',
              'message' => 'An announcement title is required.'),
          'alphaNumeric' => array(
                 'rule' => 'alphaNumeric',
              'message' => 'Title must consist of only letters and numbers.'),
          'minLength' => array(
                 'rule' => array('minLength', 10),
              'message' => 'Title must be at least 10 characters long.'),
          'required' => 'true'
        ),

      'body' => array(
          'notEmpty' => array(
                 'rule' => 'notEmpty',
              'message' => 'Announcement body not specified.'),
          'required' => 'true'
        )
    );

  public function beforeSave($options = array()) {
    $this->data['Announcement']['slug'] = $this->uniqueSlug($this->data['Announcement']['title']);
  }

  public function getThree() {
    $params = array(
        'order' => array('Announcement.created'),
        'limit' => 3
      );

    $result = $this->find('all', $params);
    return $result;
  }
}