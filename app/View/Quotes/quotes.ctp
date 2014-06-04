<div class="row">
  <div class="row">
      <div class="large-4 columns">
        <h1>Request a Quote!</h1>
      </div>
      <div class="large-8 columns">
        <h1><small>We'll get back to you as soon as we can.</small></h1>
      </div>
  </div>
  
  <?php echo $this->Form->create(); ?>
  
  <div class="row">
    <?php echo $this->Form->input('companyName', array(
            'label' => 'Company Name',
            'placeholder' => 'John and Jane Smith Inc.',
            'div' => array('class' => 'large-12 columns'))
          ); 
    ?>
  </div>
  
  <div class="row">
    <?php
      echo $this->Form->input('contactName', array(
            'label' => 'Contact Name',
            'placeholder' => 'John Smith',
            'div' => array('class' => 'large-4 columns'))
        );
      
      echo $this->Form->input('phone', array(
            'label' => 'Phone Number',
            'placeholder' => '9999999999',
            'div' => array('class' => 'large-4 columns'))
        );
      
      echo $this->Form->input('email', array(
            'label' => 'E-mail Address',
            'placeholder' => 'you@company.com',
            'div' => array('class' => 'large-4 columns'))
        );
    ?>
  </div>
  
  <br>
  
  <div class="row">
    <?php
      echo $this->Form->input('pickupDate', array(
            'label' => 'Pick-up Date (mm/dd/yyyy)',
            'placeholder' => '05/22/1992',
            'class' => 'datepicker',
            'div' => array('class' => 'medium-4 columns'))
        );

      echo $this->Form->input('pickupStreet', array(
            'label' => 'Pick-up Street',
            'placeholder' => '123 East St.',
            'div' => array('class' => 'medium-8 columns'))
        );
    ?>
  </div>

  <div class="row">
    <?php
      echo $this->Form->input('pickupCity', array(
            'label' => 'Pick-up City',
            'placeholder' => 'Ottawa',
            'div' => array('class' => 'large-6 columns'))
        );

      echo $this->Form->input('pickupLocale', array(
            'label' => 'Pick-up Province/Territory/State',
            'placeholder' => 'ON',
            'div' => array('class' => 'large-3 columns'))
        );

      echo $this->Form->input('pickupCode', array(
            'label' => 'Pick-up Postal/Zip Code',
            'placeholder' => 'L3Z 1Q8',
            'div' => array('class' => 'large-3 columns'))
        );
    ?>
  </div>

  <br>

  <div class="row">
    <?php
      echo $this->Form->input('deliveryDate', array(
            'label' => 'Delivery Date (mm/dd/yyyy)',
            'class' => 'datepicker',
            'placeholder' => '12/25/1992',
            'div' => array('class' => 'medium-4 columns'))
        );

      echo $this->Form->input('deliveryStreet', array(
            'label' => 'Delivery Street',
            'placeholder' => '456 West Blvd.',
            'div' => array('class' => 'medium-8 columns'))
        );
    ?>
  </div>
  
  <div class="row">
    <?php
      echo $this->Form->input('deliveryCity', array(
            'label'=> 'Delivery City',
            'placeholder' => 'Victoria',
            'div' => array('class' => 'large-6 columns'))
        );

      echo $this->Form->input('deliveryLocale', array(
            'label'=> 'Delivery Province/Territory/State',
            'placeholder' => 'B.C.',
            'div' => array('class' => 'large-3 columns'))
        );

      echo $this->Form->input('deliveryCode', array(
            'label' => 'Delivery Postal/Zip Code',
            'placeholder' => 'L1R 9M2',
            'div' => array('class' => 'large-3 columns'))
        );
    ?>
  </div>

  <br>

  <div class="row">
    <?php
      echo $this->Form->input('skids', array(
            'type' => 'number',
            'label' => 'Skid Count',
            'placeholder' => '12',
            'min' => '1',
            'div' => array('class' => 'medium-3 columns'))
        );

      echo $this->Form->input('weight', array(
            'type' => 'number',
            'label' => 'Weight',
            'placeholder' => '99',
            'min' => '1',
            'div' => array('class' => 'medium-3 columns'))
        );
    ?>
    <div class="medium-6 columns">
      <label>Unit</label>
      <?php
        $options = array('pounds' => 'lbs', 'kilos' => 'kg');
        $attributes = array('legend' => false);
        echo $this->Form->radio('weightUnits', $options, $attributes);
      ?>
    </div>
  </div>

  <br>

  <div class="row">
    <?php
      echo $this->Form->input('details', array(
            'type' => 'textarea',
            'label' => 'Additional Details',
            'placeholder' => "Anything you'd like us to know?",
            'div' => array('class' => 'large-12 columns'))
        );
    ?>
  </div>

  <?php
    echo $this->Form->end(array('label' => 'Submit', 'class' => 'button'));
  ?>
</div>