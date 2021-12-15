/**
* Contact Form Handling
*/

  let form = document.querySelector('.php-email-form');

  form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    form.querySelector('.loading').classList.add('d-block');
    form.querySelector('.error-message').classList.remove('d-block');
    form.querySelector('.sent-message').classList.remove('d-block');

    var name = $("input[name='name']").val();
    var email = $("input[name='email']").val();
    var subject = $("input[name='subject']").val();
    var message = $("textarea[name='message']").val();

    $.ajax({
        url: "{{ route('contactme') }}",
        type:'POST',
        data: {name:name, email:email, subject:subject, message:message},
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
