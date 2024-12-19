$(document).ready(function () {
    $('#registration-form').on('submit', function (e) {
      const name = $('#name').val();
      const email = $('#email').val();
      const phone = $('#phone').val();
  
      if (name === '' || email === '' || phone === '') {
        e.preventDefault();
        alert('Please fill all required fields.');
      }
    });
  });
  