$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
      // Custom validation example
      const name = $('#name').val().trim();
      const email = $('#email').val().trim();
      const message = $('#message').val().trim();
  
      if (!name || !email || !message) {
        alert('All fields are required!');
        e.preventDefault();
      }
    });
  });
  