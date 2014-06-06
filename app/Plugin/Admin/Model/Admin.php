<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Admin extends AdminAppModel {
  public $useTable = 'admin';

  public $validate = array(
    'username' => array(
        'required' => array(
          'rule' => array('notEmpty'),
          'message' => 'A username is required.'
        ),
        'unique' => array(
          'rule' => 'isUnique',
          'message' => 'That username is already in use.'
        )
      ),

    'password' => array(
        'required' => array(
          'rule' => array('notEmpty'),
          'message' => 'A password is required.'
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