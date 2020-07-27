<?php
require('./components/header.php');
include ('./controllers/dbconnect.php');
include ('./controllers/auth-controller.php');
?>

      <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contact us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: 4.8241508, lng: 6.8934591};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -10 },
                  { lightness: 0 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#7b8d98'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 4.8241508, lng: 6.8934591},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder = 'Full name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder = 'Email address'>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control" name="phone" type="tel" placeholder = 'Phone number'>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control" name="csubject" type="text" placeholder = 'Subject'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" cols="30" rows="9" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn" name="message_btn">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
            <div class="media-body">
              <h3>Nigeria.</h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3>+234 7082486557</h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
            <div class="media-body">
              <h3>info@starup9ja.com</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<?php require('./components/footreg.php');?>

<?php require('./components/footer.php');?>