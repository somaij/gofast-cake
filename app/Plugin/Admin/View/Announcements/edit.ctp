<?php $data = $data['Announcement']; ?>
<div class="row">
<h1>Edit Announcement "<?php echo $data['title']; ?>"</h1>
<?php echo $this->Form->create('Admin.Announcement', array('url' => array('controller' => 'announcements', 'action' => 'edit', $data['id']), 'method' => 'post')); ?>
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
      echo $this->Form->input('body', array(
                  'label' => 'Content',
                  'type' => 'textarea',
                  'div' => array('class' => 'medium-10 columns'),
                  'value' => $data['body']
                ));
    ?>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>
