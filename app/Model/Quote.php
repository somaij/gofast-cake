<?php

class Quote extends AppModel {
  public $useTable = false;

  protected $_schema = array(
          'companyName'      => array('type' => 'string', 'null' => false, 'default' => ''),
          'contactName'      => array('type' => 'string', 'null' => false, 'default' => ''),
          'phone'            => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '14'),
          'email'            => array('type' => 'string', 'null' => false, 'default' => ''),
          'pickupDate'       => array('type' => 'string', 'null' => false, 'default' => ''),
          'pickupStreet'     => array('type' => 'string', 'null' => false, 'default' => ''),
          'pickupCity'       => array('type' => 'string', 'null' => false, 'default' => ''),
          'pickupProvince'   => array('type' => 'string', 'null' => false, 'default' => ''),
          'pickupCode'       => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '7'),
          'deliveryDate'     => array('type' => 'string', 'null' => false, 'default' => ''),
          'deliveryStreet'   => array('type' => 'string', 'null' => false, 'default' => ''),
          'deliveryCity'     => array('type' => 'string', 'null' => false, 'default' => ''),
          'deliveryProvince' => array('type' => 'string', 'null' => false, 'default' => ''),
          'deliveryCode'     => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '7'),
          'skids'            => array('type' => 'string', 'null' => false, 'default' => ''),
          'weight'           => array('type' => 'string', 'null' => false, 'default' => ''),
          'weightUnits'      => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '6'),
          'details'          => array('type' => 'text',   'null' => false, 'default' => '')
      );

  public $validate = array(
      'companyName' => array(
          'companyName' => array(
            'rule' => '/^[a-z0-9 .-]*$/i',
            'message' => 'Company name can contain only letters, numbers, the dot, and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
               'rule' => 'notEmpty',
            'message' => 'Company name must be specified.'),
        ),

      'contactName' => array(
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'A contact name must be provided.',
            'required' => true,
            'allowEmpty' => false),
        ),

      'phone' => array(
          'phone' => array(
            'rule' => array('phone', null),
            'message' => 'Phone number must be a valid Canadian or U.S. number.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'A phone number must be provided.'),
        ),

      'email' => array(
          'email' => array(
            'rule' => 'email',
            'message' => 'E-mail must be valid.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'E-mail address must be provided.'),
        ),

      'pickupDate' => array(
          'date' => array(
               'rule' => array('date', 'mdy'),
            'message' => 'Pick-up date must be in mm-dd-yyyy or mm/dd/yyyy format.',
            'required' => true,
            'allowEmpty' => true),
        ),

      'pickupStreet' => array(
          'street' => array(
            'rule' => '/^[a-z 0-9.-]*$/i',
            'message' => 'Street name can contain only letters, numbers, the dot, and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Pick-up address must be provided.')
        ),

      'pickupCity' => array(
          'city' => array(
            'rule' => '/^[a-z-]*$/i',
            'message' => 'Pick-up city can only contain letters and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Pick-up city must be provided.')
        ),

      'pickupProvince' => array(
          'province' => array(
            'rule' => '/^[a-z-]*$/i',
            'message' => 'Pick-up province/territory/state can only contain letters and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Pick-up province/territory/state must be provided.')
        ),

      'pickupCode' => array(
          'code' => array(
            'rule' => 'postalCode',
            'message' => 'Pick-up postal/zip code must be a valid Canadian or U.S. code.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Pick-up postal/zip code must be provided.')
        ),

      'deliveryDate' => array(
          'date' => array(
            'rule' => array('date', 'mdy'),
            'message' => 'Delivery date must be in mm-dd-yyyy or mm/dd/yyyy format.',
            'required' => true,
            'allowEmpty' => true),
        ),

      'deliveryStreet' => array(
          'street' => array(
            'rule' => '/^[a-z 0-9.-]*$/i',
            'message' => 'Street name can contain only letters, numbers, the dot, and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Delivery address must be provided.')
        ),

      'deliveryCity' => array(
          'city' => array(
            'rule' => '/^[a-z-]*$/i',
            'message' => 'Delivery city can only contain letters and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Delivery city must be provided.')
        ),

      'deliveryProvince' => array(
          'province' => array(
            'rule' => '/^[a-z-]*$/i',
            'message' => 'Delivery province/territory/state can only contain letters and the hyphen character.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Delivery province/territory/state must be provided.')
        ),

      'deliveryCode' => array(
          'code' => array(
            'rule' => 'postalCode',
            'message' => 'Delivery postal/zip code must be a valid Canadian or U.S. code.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Delivery postal/zip code must be provided.')
        ),

      'skids' => array(
          'numeric' => array(
            'rule' => 'numeric',
            'message' => 'Skids field must be numeric.',
            'required' => true,
            'allowEmpty' => false),
          'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Skids count must be specified.')
        ),

      'weight' => array(
          'numeric' => array(
            'rule' => 'numeric',
            'message' => 'Weight field must be numeric.',
            'required' => true,
            'allowEmpty' => true),
        ),

      'weightUnits' => array(
          'inList' => array(
            'rule' => array('inList', array('pounds', 'kilos')),
            'message' => 'Weight units must be either pounds or kilograms.',
            'required' => true,
            'allowEmpty' => true),
        ),

      'details' => array(
        'allowEmpty' => array(
          'required' => false,
          'allowEmpty' => true),
        ),
    );

    public function postalCode($data) {
      $postalCode = array_values($data);
      $postalCode = $postalCode[0];
      if (is_numeric($postalCode)) {
        return preg_match('/^[0-9]{5,5}$/', $postalCode);
      } else {
        $regex = "/^[a-ceghj-nprstvxy]{1}[0-9]{1}[a-ceghj-nprstv-z]{1}[ ]{0,1}"
                  ."[0-9]{1}[a-ceghj-nprstv-z]{1}[0-9]{1}$/i";
        return preg_match($regex, $postalCode);
      }
    }
}