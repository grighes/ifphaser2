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
    <section class="main-wrap header">
      <?php $this->load->view('include/nav'); ?>
      <?php $this->load->view('main-section'); ?>
    </section>
	</header>
    
  <!-- Page Content -->
  <?php $this->load->view('aboutus'); ?>
  <hr>

  <!-- Contact Section -->
  <?php $this->load->view('contato'); ?>
  
  <footer>
	  <?php $this->load->view('include/footer'); ?>
	</footer> 
	
	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
	
  </body>
</html>