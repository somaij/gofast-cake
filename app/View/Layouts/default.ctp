<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
if (!isset($page)) {
  $page = null;
}

$description = 'Go Fast Express Inc.';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $description ?> -
		<?php echo $title_for_layout; ?>
	</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
  <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('normalize');
		echo $this->Html->css('foundation');
		echo $this->Html->css('custom');
		echo $this->Html->css('glDatePicker.flatwhite');

		echo $this->Html->script('modernizr');
		echo $this->Html->script('foundation.dropdown');
		echo $this->Html->script('foundation.topbar');

	?>
  </head>
  <body>
    <div class="page-wrap">
    <header>
      <div class="row">
        <div class="large-4 columns">
          <h1><a href="#"><?php echo $this->Html->image('logo.png', array('width' => '250', 'height' => '250')); ?></a></h1>
        </div>
        <div class="large-8 columns">
          <br>
          <h4 class="right">Your #1 Source for Transportation Services</h4>
        </div>
      </div>
      <div class="contain-to-grid sticky">
      <nav class="top-bar" data-topbar>
        <!-- Right Nav Section -->
        <div class="row">
        <div class="large-12 columns">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#"></a></h1>
          </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
          </ul>
          <ul class="right">
            <li <?php if ($page == 'home') echo 'class="active"'; ?>><?php echo $this->Html->link('Home', '/'); ?></li>
            <li <?php if ($page == 'about') echo 'class="active"'; ?>><?php echo $this->Html->link('About Us', '/about'); ?></li>
            <li <?php if ($page == 'quotes') echo 'class="active"'; ?>><?php echo $this->Html->link('Quotes', '/quotes'); ?></li>
            <li <?php if ($page == 'jobs') echo 'class="active"'; ?>><?php echo $this->Html->link('Jobs', '/jobs'); ?></li>
          </ul>
        </div>
        </div>
      </nav>
      </div>
    </header>

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
    <footer>
      <div class="row">
      <br/>
      <div class="small-4 columns">
      <ul class="no-bullet">
        <li><h4>Location</h4></li>
        <li>2828 Slough St.</li>
        <li>Mississauga, ON</li>
        <li>L4T 1G3</li>
      </ul>
      </div>
      <div class="small-4 columns">
        <ul class="no-bullet">
        <li><h4>Contact Us</h4></li>
        <li>gofastexpress@gmail.com</li>
        <li>905-488-3118 (7am - 7pm)</li>
        </ul>
      </div>
      <div class="small-4 columns">

        </div>
      </div>
      <div class="subfooter">
      <div class="row">
        <div class="small-12 columns subheader">
          <small>©2014 Go Fast Express Inc. All Rights Reserved.</small>
        </div>
      </div>
      </div>
    </footer>
    <?php
      echo $this->Html->script('vendor/jquery');
      if ($page == 'quotes') { echo $this->Html->script('glDatePicker'); }
      echo $this->Html->script('fastclick');
      echo $this->Html->script('foundation.min');
      echo $this->Html->script('foundation/foundation.topbar');
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        <?php if ($page == 'quotes') { ?>
        $('.datepicker').glDatePicker({
          cssName: 'flatwhite'
        });
        <?php } ?>

        $(document).foundation({
          topbar: {
            is_hover: false,
            mobile_show_parent_link: true
          }
        });
      });
    </script>
  </body>
</html>