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
  <div class="medium-10 columns">
    <?php
      echo $this->Form->textarea('body', array(
                  'label' => 'Content',
                  'placeholder' => 'Content goes here'
                ));
    ?>
  </div>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>
