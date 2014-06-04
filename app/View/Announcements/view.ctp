<?php $data = $data['Announcement']; ?>

<br>
  <div class="row">
    <ul class="breadcrumbs large-12 columns">
      <li><?php echo $this->Html->link('Home', '/'); ?></li>
      <li><?php echo $this->Html->link('Announcements', '/announcements/'); ?></li>
      <li class="current"><?php echo $data['title']; ?></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <h1><?php echo $data['title']; ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <p class="right"><em>Date Posted: <?php echo $data['created']; ?></em></p>
      <hr/>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <p><?php echo $data['body']; ?></p>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <?php echo $this->Html->link('View All', '/announcements/', array('class' => 'button right')); ?>
    </div>
  </div>