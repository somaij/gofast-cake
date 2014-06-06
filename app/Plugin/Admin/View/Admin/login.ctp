<div class="row">
  <h2>Login</h2>

  <?php echo $this->Form->create('Admin.Admin', array('url' => array('controller' => 'admin', 'action' => 'login'), 'method' => 'post')); ?>
  <div class="row">
    <?php
      echo $this->Form->input('username', array(
                  'label' => 'Username',
                  'placeholder' => 'Username',
                  'div' => array('class' => 'medium-6 columns')
                ));
    ?>
  </div>
  <div class="row">
    <?php
      echo $this->Form->input('password', array(
                  'label' => 'Password',
                  'placeholder' => 'Password',
                  'div' => array('class' => 'medium-6 columns')
                ));
    ?>
  </div>
  <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'button')); ?>
</div>