<nav class="navbar navbar-default border-bottom ifg-navbar">
  <div class="container">
    <div class="row">
      <!--<img src="assets/images/run.png" class="pull-left img-responsive logo-top" alt="Logo Phaser">-->
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">IF Games</a>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right ifg-navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
           <li class="page-scroll">
            <a href="index.php">Home</a>
          </li>
          <li class="page-scroll">
            <a href="portfolio">Portfolio</a> 
          </li>
          <li class="page-scroll">
            <a href="#about">About</a>
          </li>
          <li class="page-scroll">
            <a href="#contato">Contato</a>
          </li>
          <li class="page-scroll">
            <a href="#" data-toggle="modal" data-target="#navModal">Login</a>
          </li>
          <li class="page-scroll">
            <a href="user/signup" class="sign-up-btn">Sign up</a>
          </li>
        </ul>
      </div>
      
      <!-- modal login -->
      <div class="modal fade" id="navModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content ifg-modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <!--<h4 class="modal-title" id="myModalLabel">Login</h4>-->
              <header>
                <div class="ifg-modal-header"></div>
              </header>
            </div>
            <div class="modal-body">
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
              </div>
              <div class="modal-footer ifg-modal-footer">
                <button type="submmit" class="ifg-btn-secundario">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end modal login-->
      
    </div>
  </div>
</nav>