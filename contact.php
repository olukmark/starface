<!-- Page title -->
<?php $title = "Contact Us - StarFace CAMP"; ?>

<!-- header.php -->
<?php include('./includes/header.inc.php'); ?>

<!-- Hero section -->
<section class="page-title about-header-hero">
			<div class="custom-shape-divider-bottom-1630920106">
			    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
			    </svg>
			</div>
			<div class="row-parallax-bg">
				<div class="parallax-wrapper" style="transform: translate3d(0px, 14.1px, 0px);"><div class="parallax-bg-element" style="background-image: url(https://limegrow.com/wp-content/uploads/2016/01/Contact-Us-Limegrow-Web-Development-Team_1.jpg);"></div></div>
			</div>
			<div class="parallax-overlay ">
				<div class="centrize">
					<div class="v-center">
						<div class="container">
							<div class="title center">
								<h1 class="upper">Contact Us<span class="dot"></span></h1>
								<h4></h4><hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div>
              <h3 class="side-title">Send us a message</h3>
            </div>
            <form action="#">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" id="fname" name="first_name" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="last_name" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" name="message" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary" value="Send Message">
                  <div id="statusMessage">
                      <?php
                        if (! empty($message)) {
                      ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-5 ml-auto">
            <h3 class="mb-3 side-title">Quick info</h3>
            <div class="quick-contact">

              <div class="d-flex">
                <span class="icon-room"></span>
                <address>
                  Plot 3, Princess Road, Innovation village, Gulu
                </address>
              </div>
              <div class="d-flex">
                <span class="icon-phone"></span>
                <a href="tel: +256782785992">+256782785992</a>
              </div>
              <div class="d-flex">
                <span class="icon-envelope"></span>
                <a href="#">info@mydomain.com</a>
              </div>
              <div class="d-flex">
                <span class="icon-globe"></span>
                <a href="#">https://mywebsite.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include './includes/footer.inc.php'; ?>