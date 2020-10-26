<!--Contact Section-->
<br>
  <div class="container">
    <h2 class="text-center text-uppercase">Contact Me</h2>
    <div>
      <form action="https://formspree.io/Marcguerra91@gmail.com" method="POST">
        <div class="control-group">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Your Name" id="name" required
              data-validation-required-message="Please enter your name" name="name">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Your Email" id="email" required
              data-validation-required-message="Please enter your email" name="replyto">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group">
            <textarea class="form-control" rows="7" placeholder="Your Message" id="message" required
              data-validation-required-message="Please leave a message" name="message"></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="text-center">
          <div id="success"></div>
          <button type="submit" class="btn btn-lg btn-black">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
