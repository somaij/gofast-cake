<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

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
