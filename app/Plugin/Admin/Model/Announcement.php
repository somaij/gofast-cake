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
    parent::beforeSave($options);

    $newTitle = false;
    if ($this->id) {
      // Check to see if the title has changed. If so, we need to change the slug.
      $old = $this->find('first', array(
          'conditions' => array($this->alias.'.id' => $this->id),
          'fields' => array($this->alias.'.title'),
        ));

      if($old[$this->alias]['title'] != $this->data[$this->alias]['title']) {
        $newTitle = true;
      }
    }

    if (empty($this->id) || $newTitle) {
      $this->data[$this->alias]['slug'] = $this->uniqueSlug($this->data[$this->alias]['title'], ($this->id ?: null));
    }

    return true;
  }
}