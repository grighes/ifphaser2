<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
	  <?php $this->load->view('include/head'); ?>
  </head>
	<body class="ifg-portfolio">
	
	<header class="ifg-header">
	  <?php $this->load->view('include/nav'); ?>
	</header>  
	<div class="line"></div>  
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Portfolio</h1>
      </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
      <div class="col-md-12 ifg-full-container margin-bottom">
        <div class="col-md-7 ifg-container">
          <a href="#">
            <img class="img-responsive" src="assets/images/adventure.png" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project One</h3>
          <!--<h4>Subheading</h4>-->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate.</p>
          <div class="btn-wrap">
            <div class="line"></div>
            <div class="ifg-button-area">
              <a class="ifg-btn-secundario" href="#">Jogar</a>
            </div>
            <div class="ifg-button-area">
              <a class="ifg-btn-5" href="#">Votar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <!--<div class="row text-center">
      <div class="col-lg-12">
        <ul class="pagination">
          <li>
            <a href="#">&laquo;</a>
          </li>
          <li class="active">
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">4</a>
          </li>
          <li>
            <a href="#">5</a>
          </li>
          <li>
            <a href="#">&raquo;</a>
          </li>
        </ul>
      </div>
    </div>-->
    
  </div>
  
  <?php $this->load->view('include/footer'); ?>
	
	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
	
  </body>
</html>