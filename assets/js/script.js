//Verification of mobile number
    $('#send-otp').click(function() {
      const phone = $('#phone').val();
      if (phone) {
        $('#phone-display').text(phone);
        $('#phone-screen').addClass('hidden');
        $('#otp-screen').removeClass('hidden');
      } else {
        alert('Please enter a valid phone number.');
      }
    });

    $('.otp-box input').on('input', function() {
      const $next = $(this).next('input');
      if ($(this).val() && $next.length) {
        $next.focus();
      }
    });

    $('#verify-otp').click(function() {
      const otp = $('.otp-box input').map(function() {
        return $(this).val();
      }).get().join('');
      alert('Entered OTP: ' + otp);
      // Add your verification logic here
    });
