<div class="row">
<h1>Create New Announcement</h1>
<?php echo $this->Form->create('Admin.Announcement', array('url' => array('controller' => 'announcements', 'action' => 'add'), 'method' => 'post')); ?>
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
      echo $this->Form->input('body', array(
                  'label' => 'Content',
                  'placeholder' => 'Content goes here',
                  'type' => 'textarea',
                  'div' => array('class' => 'medium-10 columns')
                ));
    ?>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>
