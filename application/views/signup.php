<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
	  <?php $this->load->view('include/head'); ?>
  </head>
	<body class="ifg-login">
	
	<header class="ifg-header">
	  <?php $this->load->view('include/nav'); ?>
	</header>  
	<div class="line"></div> 
	  
	<!-- Container Login Modal -->
  <section class="header ifg-register-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-margin">
          
        	<div class="ifg-register-wrap">
            <form action="#">
              <div class="row control-group">
                <div class="ifg-form-glow form-group floating-label-form-group controls">
                  <!--<label>Email Address</label>-->
                    <input type="email" placeholder="E-mail Address" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="ifg-form-glow form-group floating-label-form-group controls">
                  <!--<label></label>-->
                  <input type="password" placeholder="Password" id="password" required data-validation-required-message="Please enter your password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="ifg-form-glow form-group floating-label-form-group controls">
                  <!--<label></label>-->
                  <input type="password" placeholder="Confirm Password" id="password" required data-validation-required-message="Please enter your password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="ifg-modal-footer">
                <button type="submmit" class="ifg-btn-secundario ifg-large-btn">Sign Up</button>
                <!--<button type="submmit" class="ifg-btn-5">Reset</button>-->
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  <section>

  
  
  <?php $this->load->view('include/footer'); ?>
	
	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
	
  </body>
</html>