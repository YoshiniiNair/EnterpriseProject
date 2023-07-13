$(document).ready(function() {
    // Form validation rules using jQuery Validate plugin
    $('#adminLoginForm').validate({
      rules: {
        username: 'required',
        password: 'required'
      },
      messages: {
        username: 'Please enter your username',
        password: 'Please enter your password'
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });