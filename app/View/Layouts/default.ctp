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

$description = 'Go Fast Express Inc.';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $description ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');

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
    <header>
      <div class="row">
        <div class="large-4 columns">
          <h1><a href="#"><?php echo $this->Html->image('logo.png', array('width' => '250', 'height' => '250')); ?></a></h1>
        </div>
        <div class="large-8 columns">
          </br>
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
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"'; ?>><a href="/index.php" >Home</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"'; ?>><a href="/pages/about.php" >About Us</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'quotes.php')) echo 'class="active"'; ?>><a href="/pages/quotes.php" >Quotes</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'jobs.php')) echo 'class="active"'; ?>><a href="/pages/jobs.php" >Jobs</a></li>
          </ul>
        </div>
        </div>
      </nav>
      </div>
    </header>

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>

    <footer>
      <br/>
      <div class="row">

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
    </footer>
    <?php
        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('glDatePicker');
        echo $this->Html->script('fastclick');
        echo $this->Html->script('foundation.min');
        echo $this->Html->script('foundation/foundation.topbar');
    ?>
    <script type="text/javascript">
      $(document).ready(

      )
      $(window).load(function()
      {
          $('.datepicker').glDatePicker({
          cssName: 'flatwhite'});
      });

      $(document).foundation({
      topbar : {
        is_hover: false,
        mobile_show_parent_link: true
      }
      });
    </script>
    <?php // echo $this->element('sql_dump'); ?>
  </body>
</html>
