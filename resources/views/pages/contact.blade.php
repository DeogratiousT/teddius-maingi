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
            <input type="text" name="name" class="form-control" id="name" placeholder="Don Joe" value="{{ old('name') }}" autocomplete="off">
            <p class="text-danger" id="lname"></p>
          </div>

          <div class="col-md-6 form-group">
            <label for="name">Your Email</label>  
            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" value="{{ old('email') }}" autocomplete="off">
            <p class="text-danger" id="lemail"></p>
          </div>
        </div>

        <div class="form-group">
          <label for="name">Subject</label>
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" autocomplete="off">
          <p class="text-danger" id="lsubject"></p>
        </div>

        <div class="form-group">
          <label for="name">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" autocomplete="off">
            {{ old('message') }}
          </textarea>
          <p class="text-danger" id="lmessage"></p>
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

          clearErrors();
          
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
                  if($.isEmptyObject(data.errors)){
                      clearInputs();
                      displaySuccess(data.success);
                  }else{
                    loopErrors(data.errors);
                  }
              }
          });
        });

        function loopErrors(errors) {
          errors.forEach(error => {
            if (error['0'] == 'name') {
              let input = document.getElementById('name');
              let label = document.getElementById('lname');
              displayError(error, input, label);
            }

            if (error['0'] == 'email') {
              let input = document.getElementById('email');
              let label = document.getElementById('lemail');
              displayError(error, input, label);
            }

            if (error['0'] == 'subject') {
              let input = document.getElementById('subject');
              let label = document.getElementById('lsubject');
              displayError(error, input, label);
            }

            if (error['0'] == 'message') {
              let input = document.getElementById('message');
              let label = document.getElementById('lmessage');
              displayError(error, input, label);
            }
          });
        }

        function displaySuccess(success) {
          form.querySelector('.loading').classList.remove('d-block');
          form.querySelector('.sent-message').innerHTML = success;
          form.querySelector('.sent-message').classList.add('d-block');
        }

        function displayError(error, input, label) {
          input.classList.add("border");
          input.classList.add("border-danger");
          label.innerHTML = error['1'];

          form.querySelector('.loading').classList.remove('d-block');
        }

        function clearErrors() {
          document.getElementById('name').classList.remove('border');
          document.getElementById('name').classList.remove('border-danger');
          document.getElementById('lname').innerHTML = '';

          document.getElementById('email').classList.remove('border');
          document.getElementById('email').classList.remove('border-danger');
          document.getElementById('lemail').innerHTML = '';

          document.getElementById('subject').classList.remove('border');
          document.getElementById('subject').classList.remove('border-danger');
          document.getElementById('lsubject').innerHTML = '';

          document.getElementById('message').classList.remove('border');
          document.getElementById('message').classList.remove('border-danger');
          document.getElementById('lmessage').innerHTML = '';
        }

        function clearInputs() {
          document.getElementById('name').classList.remove('border');
          document.getElementById('name').classList.remove('border-danger');
          document.getElementById('lname').innerHTML = '';
          document.getElementById('name').value = '';

          document.getElementById('email').classList.remove('border');
          document.getElementById('email').classList.remove('border-danger');
          document.getElementById('lemail').innerHTML = '';
          document.getElementById('email').value = '';

          document.getElementById('subject').classList.remove('border');
          document.getElementById('subject').classList.remove('border-danger');
          document.getElementById('lsubject').innerHTML = '';
          document.getElementById('subject').value = '';

          document.getElementById('message').classList.remove('border');
          document.getElementById('message').classList.remove('border-danger');
          document.getElementById('lmessage').innerHTML = '';
          document.getElementById('message').value = '';
        }

      </script>
  @endpush