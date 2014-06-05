<?php $job = $data['Job']; ?>
<br>
  <div class="row">
    <ul class="breadcrumbs small-12 columns">
      <li><?php echo $this->Html->link('Home', '/'); ?></li>
      <li><?php echo $this->Html->link('Jobs', '/jobs/'); ?></li>
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

      <?php echo $this->Html->link('View All Jobs', '/jobs', array('class' => 'button right')); ?>
    </div>
  </div>