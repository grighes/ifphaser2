<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
	  <?php $this->load->view('include/head'); ?>
  </head>
	<body>
	
	<!-- Header -->
	<header>
    <section class="main-wrap header ifg-main-wrap">
      <?php $this->load->view('include/nav'); ?>
      <?php $this->load->view('main-section'); ?>
    </section>
	</header>
  
  <!-- AboutUs -->
  <?php $this->load->view('aboutus'); ?>

  <!-- Contact -->
  <?php $this->load->view('contato'); ?>

  <!-- Footer -->
	<?php $this->load->view('include/footer'); ?>

	
	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
	
  </body>
</html>