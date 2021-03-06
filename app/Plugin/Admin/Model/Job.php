<?php

class Job extends AdminAppModel {

  public $validate = array(
      'title' => array(
          'lettersOnly' => array(
              'rule' => '/^[a-z ]*$/i', // Alphabet only (+ spaces)
              'message' => 'Job title can only contain letters and spaces.',
              'required' => true,
              'allowEmpty' => false,
              'last' => false
            ),

          'between' => array(
              'rule' => array('between', 4, 20),
              'message' => 'Job title must be between 4 and 20 characters long.'
            )
        ),

      'description' => array(
          'notEmpty' => array(
              'rule' => 'notEmpty',
              'message' => 'Job description must be specified.',
              'required' => true
            ),
        ),

      'requirements' => array(
          'notEmpty' => array(
              'rule' => 'notEmpty',
              'message' => 'Job requirements must be specified.',
              'required' => true
            )
        ),

      'close_date' => array(
          'date' => array(
              'rule' => array('date', 'ymd'),
              'message' => 'Close date must follow yyyy-mm-dd format.',
              'required' => false,
              'allowEmpty' => true
            )
        )
    );

  public function beforeSave($options = array()) {
    parent::beforeSave($options);

    if (empty($this->id)) {
      $now = new DateTime(null, new DateTimeZone('America/New_York'));
      $this->data[$this->alias]['post_date'] = $now->format('Y-m-d');
    }

    return true;
  }
}