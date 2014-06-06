<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Admin extends AdminAppModel {
  public $useTable = 'admin';

  public $validate = array(
    'username' => array(
        'required' => array(
          'rule' => array('notEmpty'),
          'message' => 'A username is required.',
          'required' => true,
          'last' => false,
        ),
        'unique' => array(
          'rule' => 'isUnique',
          'message' => 'That username is already in use.'
        )
      ),

    'pwd' => array(
        'required' => array(
          'rule' => array('notEmpty'),
          'message' => 'A password is required.',
          'required' => true,
        )
      )

    );

  public function beforeSave($options = array()) {
    parent::beforeSave($options);
    if (!empty($this->data[$this->alias]['pwd'])) {
      $hasher = new BlowfishPasswordHasher();
      $this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['pwd']);
    }
    return true;
  }
}