<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
	  <?php $this->load->view('include/head'); ?>
  </head>
	<body>
	
	<header>
	  <?php $this->load->view('include/nav'); ?>
	</header>  
	  
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <div class="row">
      <hr>
      <div class="col-lg-12">
        <h1 class="page-header">Portifólio de Jogos
          <small>Secondary Text</small>
        </h1>
      </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="https://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Project One</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">View Project <span class="fa fa-rocket"></span></a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="https://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Project Two</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
        <a class="btn btn-primary" href="#">View Project <span class="fa fa-rocket"></span></a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="https://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Project Three</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
        <a class="btn btn-primary" href="#">View Project <span class="fa fa-rocket"></span></a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="https://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Project Four</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
        <a class="btn btn-primary" href="#">View Project <span class="fa fa-rocket"></span></a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Five -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="https://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Project Five</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
        <a class="btn btn-primary" href="#">View Project <span class="fa fa-rocket"></span></a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
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
    </div>
  </div>
  
  <footer>
	  <?php $this->load->view('include/footer'); ?>
	</footer> 
	
	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
	
  </body>
</html>