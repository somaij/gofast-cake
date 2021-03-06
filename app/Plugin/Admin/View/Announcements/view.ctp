<?php $announcement = $data['Announcement']; ?>
<br>
  <div class="row">
    <ul class="breadcrumbs large-12 columns">
      <li><?php echo $this->Html->link('Home', array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('Announcements', array('plugin' => 'admin', 'controller' => 'announcements', 'action' => 'index')); ?></li>
      <li class="current"><?php echo $announcement['title']; ?></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <h1><?php echo $announcement['title']; ?></h1>
      <p class="right"><em>Date Posted: <?php echo $announcement['created']; ?></em></p>
      <hr/>

      <p><?php echo $announcement['body']; ?></p>
      <ul class="button-group">
      <li><?php echo $this->Html->link('View All', array('plugin' => 'admin', 'controller' => 'announcements', 'action' => 'index'), array('class' => 'button right')); ?></li>
      <li><?php echo $this->Html->link('Edit', array('plugin' => 'admin', 'controller' => 'announcements', 'action' => 'edit', $announcement['id']), array('class' => 'button right')); ?></li>
      <li><?php echo $this->Html->link('Delete', array('plugin' => 'admin', 'controller' => 'announcements', 'action' => 'delete', $announcement['id']), array('class' => 'button right')); ?></li>
      </ul>
    </div>
  </div>