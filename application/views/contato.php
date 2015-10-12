  <section class="ifg-contact-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="page-header-w">Contato</h>
          <hr class="hr-aboutus-w"></hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <!--<label>Name</label>-->
                <input type="text" class="form-control ifg-form" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <!--<label>Email Address</label>-->
                  <input type="email" class="form-control ifg-form" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <!--<label>Phone Number</label>-->
                <input type="tel" class="form-control ifg-form" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <!--<label>Message</label>-->
                  <textarea rows="5" class="form-control ifg-form" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
            </div>
            <div id="success"></div>
            <div class="row">
              <div class="form-group col-xs-12">
                  <button type="submit" class="ifg-btn-3">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>