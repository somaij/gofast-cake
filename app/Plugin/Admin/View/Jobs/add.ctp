<div class="row">
<h1>Create a Job Posting</h1>
<?php echo $this->Form->create('Admin.Job', array('url' => array('controller' => 'jobs', 'action' => 'add'), 'method' => 'post')); ?>
  <div class="row">
    <?php
      echo $this->Form->input('title', array(
                  'label' => 'Title',
                  'placeholder' => 'Title',
                  'div' => array('class' => 'medium-6 columns')
                ));
    ?>
  </div>
  <div class="row">
    <?php
      echo $this->Form->input('description', array(
                  'label' => 'Description',
                  'placeholder' => 'A description of the job goes here.',
                  'type' => 'textarea',
                  'div' => array('class' => 'medium-10 columns')
                ));
    ?>
  </div>
  <div class="row">
    <?php
      echo $this->Form->input('requirements', array(
                  'label' => 'Requirments',
                  'type' => 'textarea',
                  'placeholder' => 'The requirements to be qualified for the job go here.',
                  'div' => array('class' => 'medium-10 columns')
                ));
    ?>
  </div>
  <div class="row">
  <?php
      echo $this->Form->input('close_date', array(
            'label' => 'Closing Date (mm/dd/yyyy)',
            'placeholder' => '05/22/1992',
            'class' => 'datepicker',
            'type' => 'text', // Ehhhh...
            'div' => array('class' => 'medium-4 columns'))
        );
  ?>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>
