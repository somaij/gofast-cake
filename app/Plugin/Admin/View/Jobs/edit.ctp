<div class="row">
<h1>Edit <?php echo $data['title']; ?> Posting</h1>
<?php echo $this->Form->create('Admin.Job', array('url' => array('controller' => 'jobs', 'action' => 'add'), 'method' => 'post')); ?>
  <div class="row">
    <?php
      echo $this->Form->input('title', array(
                  'label' => 'Title',
                  'value' => $data['title'],
                  'div' => array('class' => 'medium-6 columns')
                ));
    ?>
  </div>
  <div class="row">
    <?php
      echo $this->Form->input('description', array(
                  'label' => 'Description',
                  'value' => $data['description'],
                  'type' => 'textarea',
                  'div' => array('class' => 'medium-10 columns')
                ));
    ?>
  </div>
  <div class="row">
    <?php
      echo $this->Form->input('requirements', array(
                  'label' => 'Requirements',
                  'type' => 'textarea',
                  'value' => $data['requirements'],
                  'div' => array('class' => 'medium-10 columns')
                ));
    ?>
  </div>
  <div class="row">
  <?php
      echo $this->Form->input('close_date', array(
            'label' => 'Closing Date (mm/dd/yyyy)',
            'value' => $data['close_date'],
            'class' => 'datepicker',
            'type' => 'text',
            'div' => array('class' => 'medium-4 columns'))
        );
  ?>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>
