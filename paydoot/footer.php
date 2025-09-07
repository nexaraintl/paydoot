     <footer class="footer-wrapper">
         <div class="footer-wrapper__inside">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer-copyright">
                        <p><span>© 2025</span><a href="#">Nexara International Private Limited</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-menu text-end">
                        <ul>
                           <li>
                              <a href="terms.php">Terms and condition</a>
                           </li>
                           <li>
                              <a href="policy.php">Policy</a>
                           </li>
                           <li>
                              <a href="#">Contact</a>
                           </li>
                        </ul>
                     </div>
                     <!-- ends: .Footer Menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </main>
   <div id="overlayer">
      <div class="loader-overlay">
         <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
         </div>
      </div>
   </div>
   <div class="overlay-dark-sidebar"></div>
   <div class="customizer-overlay"></div>
   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- inject:js-->
   <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
   <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>
   <script src="assets/vendor_assets/js/bootstrap/popper.js"></script>
   <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
   <script src="assets/vendor_assets/js/moment/moment.min.js"></script>
   <script src="assets/vendor_assets/js/accordion.js"></script>
   <script src="assets/vendor_assets/js/apexcharts.min.js"></script>
   <script src="assets/vendor_assets/js/autoComplete.js"></script>
   <script src="assets/vendor_assets/js/Chart.min.js"></script>
   <script src="assets/vendor_assets/js/daterangepicker.js"></script>
   <script src="assets/vendor_assets/js/drawer.js"></script>
   <script src="assets/vendor_assets/js/dynamicBadge.js"></script>
   <script src="assets/vendor_assets/js/dynamicCheckbox.js"></script>
   <script src="assets/vendor_assets/js/footable.min.js"></script>
   <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
   <script src="assets/vendor_assets/js/google-chart.js"></script>
   <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
   <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
   <script src="assets/vendor_assets/js/jquery.countdown.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.filterizr.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.peity.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
   <script src="assets/vendor_assets/js/leaflet.js"></script>
   <script src="assets/vendor_assets/js/leaflet.markercluster.js"></script>
   <script src="assets/vendor_assets/js/loader.js"></script>
   <script src="assets/vendor_assets/js/message.js"></script>
   <script src="assets/vendor_assets/js/moment.js"></script>
   <script src="assets/vendor_assets/js/muuri.min.js"></script>
   <script src="assets/vendor_assets/js/notification.js"></script>
   <script src="assets/vendor_assets/js/popover.js"></script>
   <script src="assets/vendor_assets/js/select2.full.min.js"></script>
   <script src="assets/vendor_assets/js/slick.min.js"></script>
   <script src="assets/vendor_assets/js/trumbowyg.min.js"></script>
   <script src="assets/vendor_assets/js/wickedpicker.min.js"></script>
   <script src="assets/theme_assets/js/apexmain.js"></script>
   <script src="assets/theme_assets/js/charts.js"></script>
   <script src="assets/theme_assets/js/drag-drop.js"></script>
   <script src="assets/theme_assets/js/footable.js"></script>
   <script src="assets/theme_assets/js/full-calendar.js"></script>
   <script src="assets/theme_assets/js/googlemap-init.js"></script>
   <script src="assets/theme_assets/js/icon-loader.js"></script>
   <script src="assets/theme_assets/js/jvectormap-init.js"></script>
   <script src="assets/theme_assets/js/leaflet-init.js"></script>
   <script src="assets/theme_assets/js/main.js"></script>
   <!-- endinject-->

   <script>
      $(document).ready(function(){
         var currentUrl = window.location.href;
          //alert(currentUrl);

         $('ul li a').each(function() {
            if (this.href === currentUrl) {
                  $(this).addClass('active'); // Add active class to the anchor tag
                  // Or, if you want to add it to the parent <li>:
                  $(this).closest('li').addClass('active');
                  $(this).parents('li').addClass('open');
                  $(this).closest('a').addClass('active');
                  $(this).closest('.open ul').css('display','block');
                  
            }
         });

         //Redirect to another form 
         // $(".next").click(function(){
         //    alert("in next");
         //    current_fs = $(this).parent();
         //    next_fs = $(this).parent().next();
            
         //    //Add Class Active
         //    $("#v-pills-tab li").eq($("fieldset").index(next_fs)).addClass("active");
            
         //    //show the next fieldset
         //    next_fs.show(); 
         //    //hide the current fieldset with style
         //    current_fs.animate({opacity: 0}, {
         //       step: function(now) {
         //             // for making fielset appear animation
         //             opacity = 1 - now;

         //             current_fs.css({
         //                'display': 'none',
         //                'position': 'relative'
         //             });
         //             next_fs.css({'opacity': opacity});
         //       }, 
         //       duration: 600
         //    });
         // });

         //Chnage profile photo
         var readURL = function(input) {
            if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                     $('.profile-pic').attr('src', e.target.result);
                  }
         
                  reader.readAsDataURL(input.files[0]);
            }
         }
         

         $(".file-upload").on('change', function(){
            readURL(this);
         });
         
         $(".upload-button").on('click', function() {
            $(".file-upload").click();
         });

        
         
         //User Bank details api
         $("#ifsc_code").change(function() {
            //get the selected value
            var selectedValue = this.value;
            //alert(selectedValue);

            //make the ajax call
            $.ajax({
               url: 'bank_api.php',
               type: 'POST',
               data: {ifsc : selectedValue},
               success: function(data) {
                     //console.log(data);
                     data = JSON.parse(data);
                     
                     if(data)
                     {
                        $(".bank_details-hide").css("display","block");
                        $("#bank_name").val(data.bank_name);
                        $("#bank_address").val(data.branch_address);
                        $("#branch_name").val(data.branch_name);
                        $("#branch_center").val(data.branch_center);
                        $("#branch_district").val(data.branch_district);
                        $("#branch_state").val(data.branch_state);
                     }

                     
               }
            });
         });
         
        
         $('#profile_img').on('change', function() {
            console.log("profile iamge");
            var profile_img = $(".profile-pic").attr("src");
            console.log(profile_img);
            $("#profile_img").attr('value',profile_img);
         });
         //Add User Details
         $("#user_form").on('submit',(function(e) {
         
            // var pan_img = $(".pan_img").attr("src");
            // $("#pan_img").val(pan_img);

            $(':disabled').each(function(e) {
               $(this).removeAttr('disabled');
            });
            
            
            
            e.preventDefault();

            $.ajax({
               type: 'POST',
               url: 'add_user_data.php',
               data: $('#user_form').serialize(),
               enctype: 'multipart/form-data',
               success: function (data) {
                  console.log(data);
                  Swal.fire({
                     title: "User added successfully!",
                     icon: "success",
                     draggable: true
                  });
               }
            });

         }));

         //Edit user Details
         $("#user_edit_form").on('submit',(function(e) {
            $(':disabled').each(function(e) {
               $(this).removeAttr('disabled');
            });
            
            e.preventDefault();

            $.ajax({
               type: 'POST',
               url: 'edit_user_data.php',
               data: $('#user_edit_form').serialize(),
               enctype: 'multipart/form-data',
               success: function (data) {
                  //console.log(data);
                  Swal.fire({
                     title: "User profile updated successfully!",
                     icon: "success",
                     draggable: true
                  });
               }
            });

         }));

         //View user data modal
          $("a[name=view]").on("click", function () { 
               var id=$(this).data("index"); 
               var requestData = {
                  id: id
               };
               // alert(id);
               //$("#modal-basic").show();
               $.ajax({
                  type: 'POST',
                  url: 'view_user_data.php',
                  data: requestData,
                  success: function (data) {
                     console.log(data);
                     //$("#modal-basic").show();
                  }
               });
          });

         //Remove user data
         $("a[name=remove]").on("click", function () { 
            var id=$(this).data("index"); 
            var requestData = {
               id: id
            };
            //alert(id);
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
               confirmButton: "btn btn-success",
               cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to delete this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
               $.ajax({
                  type: 'POST',
                  url: 'remove_user_data.php',
                  data: requestData,
                  success: function (data) {
                     console.log(data);
                     swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "User has been deleted.",
                        icon: "success"
                     }).then((result) => {
                     if (result.isConfirmed) { // Or simply 'true' if no confirmation is needed
                           window.location.reload(); // Reloads the current page
                        }
                     });
                  }
               });

               
            } else if (
               /* Read more about handling dismissals below */
               result.dismiss === Swal.DismissReason.cancel
            ) {
               swalWithBootstrapButtons.fire({
                  title: "Cancelled",
                  text: "Your imaginary file is safe :)",
                  icon: "error"
               });
            }
            });
         });
      });
      
   </script>
</body>

</html>