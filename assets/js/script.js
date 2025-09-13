$(function ($) {
  "use strict";

  jQuery(document).ready(function () {
     //Add User Details
         $("#register_form").on('submit',(function(e) {
         
            e.preventDefault();

            $.ajax({
               type: 'POST',
               url: 'register_data.php',
               data: $('#register_form').serialize(),
               success: function (data) {
                  console.log(data);
                  Swal.fire({
                     title: "Account created successfully!",
                     icon: "success",
                     draggable: true
                  }).then(function() {
                     window.location.href = '../';  
                  });
               }
            });

         }));
  })
})