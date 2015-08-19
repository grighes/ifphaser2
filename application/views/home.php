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
	  <?php $this->load->view('include/header'); ?>
	</header>  
	  
	<!-- Container Main Call -->
  <section class="main-wrap header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-margin">
          <h1 class="text-uppercase text-center intro-text">
            <strong>
              <!--Jogos gerados com <a href="http://phaser.io/" class="link-principal" target="blank">Phaser</a>-->
              Começe seu jogo hoje!
              <h1>Seja Bem-Vindo ao IFRS GAME-CLUB</h1>
            </strong>
          </h1>
          <hr class="large-hr">
          <h4 class="text-center second-text text-uppercase"><strong>Curso de Sistemas para Internet do IFRS Porto Alegre - 2015</strong></h4>
          <div class="third-text">
            <!--<h5 class="text-center">Clique aqui e descubra</h5>-->
            <button type="button" class="main-btn btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Envie seu jogo!</button>
          </div>
        </div>

        <!-- Loads Modal.php file -->
        <?php $this->load->view('modal'); ?>

      </div>
    </div>
  </section>

    
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