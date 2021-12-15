<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row mt-2">

        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/teddius-maingi-522b431b4/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/DeogratiousT" target="_blank" class="github"><i class="bi bi-github"></i></a>
                <a href="https://twitter.com/teddiusmaingi" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>teddiusmaingi@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+254 795 615409</p>
          </div>
        </div>
      </div>

      <form role="form" class="php-email-form mt-4">
        
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Don Joe" required>
          </div>

          <div class="col-md-6 form-group mt-3 mt-md-0">
            <label for="name">Your Email</label>  
            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required>
          </div>
        </div>

        <div class="form-group mt-3">
          <label for="name">Subject</label>
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>

        <div class="form-group mt-3">
          <label for="name">Message</label>
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>

        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>

  @push('scripts')
      <script src="{{ asset('js/app.js') }}"></script>
      <script>
        /**
        * Contact Form Handling
        */

          let form = document.querySelector('.php-email-form');

        form.addEventListener('submit', function(event) {
          event.preventDefault();
          
          form.querySelector('.loading').classList.add('d-block');
          form.querySelector('.error-message').classList.remove('d-block');
          form.querySelector('.sent-message').classList.remove('d-block');

          var _token = $("input[name='_token']").val();
          var name = $("input[name='name']").val();
          var email = $("input[name='email']").val();
          var subject = $("input[name='subject']").val();
          var message = $("textarea[name='message']").val();

          $.ajax({
              url: "{{ route('contactme') }}",
              type:'POST',
              data: {_token:_token, name:name, email:email, subject:subject, message:message},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                      displaySuccess(data.success);
                  }else{
                      printErrorMsg(data.error);
                  }
              }
          });
        });

        function displayError(errors) {
          form.querySelector('.loading').classList.remove('d-block');
          form.querySelector('.error-message').innerHTML = error;
          form.querySelector('.error-message').classList.add('d-block');
        }

        function displaySuccess(success) {
          form.querySelector('.loading').classList.remove('d-block');
          form.querySelector('.sent-message').innerHTML = success;
          form.querySelector('.sent-message').classList.add('d-block');
        }

      </script>
  @endpush