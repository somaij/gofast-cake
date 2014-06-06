<?php

class Announcement extends AdminAppModel {
  public $validate = array(
      'title' => array(
          'sensicalChars' => array(
                'rule' => '/^[a-z .!,?-]*$/i',
                'message' => 'Title must consist of only letters, numbers, and common punctuation.',
                'required' => true,
                'allowEmpty' => false,
                'last' => false
              ),
          'minLength' => array(
                'rule' => array('minLength', 10),
                'message' => 'Title must be at least 10 characters long.'
              ),
        ),

      'body' => array(
          'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Announcement body is required.',
                'required' => true
              ),
        ),
    );

  public function beforeSave($options = array()) {
    if (!isset($this->id)) {
      $this->data['Announcement']['slug'] = $this->uniqueSlug($this->data['Announcement']['title']);
    }
  }
}