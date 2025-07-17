<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-logo">
          <h3>TechNova Solutions Pvt. Ltd.</h3>
          <p>TechNova is a leading provider of innovative IT solutions and services, helping businesses embrace digital transformation with ease. We are committed to excellence and client satisfaction.</p>
          <p>Located in the heart of Bengaluru, we offer top-tier web and software development services with a focus on quality and innovation.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Contact Form Section -->
      <div class="col-md-6">
        <p>We’d love to hear from you. Drop us a message below.</p>

        <!-- Form itself -->
        <form name="sentMessage" id="contactForm" novalidate>
          <h3>Contact Us</h3>

          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" placeholder="Full Name" id="name" required
                data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" id="email" required
                data-validation-required-message="Please enter your email" />
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required
                data-validation-required-message="Please enter your message" minlength="5"
                data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>

          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
      </div>

      <!-- Google Maps Section -->
      <div class="col-md-6">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="overflow:hidden;height:500px;width:600px;">
          <div id="gmap_canvas" style="height:500px;width:600px;"></div>
          <style>
            #gmap_canvas img {
              max-width: none !important;
              background: none !important;
            }
          </style>
          <a class="google-map-code" href="#" id="get-map-data">TechNova Solutions</a>
        </div>

        <script type="text/javascript">
          function init_map() {
            var myOptions = {
              zoom: 14,
              center: new google.maps.LatLng(12.9716, 77.5946), // Bengaluru Coordinates
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
            marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(12.9716, 77.5946)
            });

            infowindow = new google.maps.InfoWindow({
              content: "<b>TechNova Solutions Pvt. Ltd.</b><br/>123 Innovation Park<br/>Bengaluru, India"
            });

            google.maps.event.addListener(marker, "click", function () {
              infowindow.open(map, marker);
            });

            infowindow.open(map, marker);
          }

          google.maps.event.addDomListener(window, 'load', init_map);
        </script>
      </div>
    </div>
  </div>
</section>
