<?php $job = $data['Job']; ?>
<br>
  <div class="row">
    <ul class="breadcrumbs small-12 columns">
      <li><?php echo $this->Html->link('Home', array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('Jobs', array('plugin' => 'admin', 'controller' => 'jobs', 'action' => 'index')); ?></li>
      <li class="current"><?php echo $job['title']; ?></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <h1><?php echo $job['title']; ?></h1>
      
      <p class="right">
        <em><?php echo "Date Posted: ".$job['post_date']." - Closing Date: ".$job['close_date']; ?></em>
      </p>

      <h3>Description</h3>
      <p><?php echo $job['description']; ?></p>

      <h3>Requirements</h3>
      <p><?php echo $job['requirements']; ?></p>

      <ul class="button-group">
      <li><?php echo $this->Html->link('View All', array('plugin' => 'admin', 'controller' => 'jobs', 'action' => 'index'), array('class' => 'button right')); ?></li>
      <li><?php echo $this->Html->link('Edit', array('plugin' => 'admin', 'controller' => 'jobs', 'action' => 'edit', $job['id']), array('class' => 'button right')); ?></li>
      <li><?php echo $this->Html->link('Delete', array('plugin' => 'admin', 'controller' => 'jobs', 'action' => 'delete', $job['id']), array('class' => 'button right')); ?></li>
      </ul>
    </div>
  </div>