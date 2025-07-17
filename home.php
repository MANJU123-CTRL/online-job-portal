<section id="banner">
  <!-- Slider -->
  <div id="main-slider" class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
        <div class="flex-caption">
          <h3>Innovation</h3>
          <p>Empowering Future Technologies</p>
        </div>
      </li>
      <li>
        <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
        <div class="flex-caption">
          <h3>Expertise</h3>
          <p>Delivering Value with Every Solution</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section id="call-to-action-2">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-sm-9">
        <h3>Partner with TechNova Solutions</h3>
        <p>We foster strategic, long-term relationships with our clients to deliver innovative, sustainable solutions. At TechNova Solutions Pvt. Ltd., our expert team aligns with your goals to drive success and operational excellence.</p>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aligncenter">
          <h2 class="aligncenter">TechNova Solutions Pvt. Ltd.</h2>
        </div>
        <br/>
      </div>
    </div>

    <div class="col-sm-4 info-blocks">
      <i class="icon-info-blocks fa fa-building-o"></i>
      <div class="info-blocks-in">
        <h3>TechNova Solutions Pvt. Ltd.</h3>
        <p>Address: 2nd Floor, Ramesh Tech Park, HSR Layout, Bengaluru – 560102</p>
        <p>Contact No.: +91 98456 78901</p>
      </div>
    </div>
  </div>
</section>

<section class="section-padding gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h2>Popular Jobs</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php 
          $sql = "SELECT * FROM `tblcategory`";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();

          foreach ($cur as $result) {
            echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
          }
        ?>
      </div>
    </div>
  </div>
</section>

<section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder"></div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <h3>Our Team</h3>
        <div style="height:235px;">
          <p>
            &nbsp;&nbsp;Our collaborative team at TechNova breaks down barriers, fostering innovation and teamwork across all levels. We’re driven by a shared passion for our clients' success and a culture of support that nurtures both professional growth and lasting partnerships.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="about home-about">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Programs</span></h3>
        </div>
        <p>TechNova Solutions offers a variety of innovative tech programs designed to empower young professionals and support continuous learning in emerging technologies.</p>
      </div>

      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Latest News</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                  <i class="fa fa-angle-right"></i> TechNova Launches AI-Driven HR Tool
                </a>
              </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                Our latest innovation leverages AI to enhance recruitment accuracy and employee engagement metrics across industries.
              </div>
            </div>
          </div>
          <!-- Additional panels can be added below if needed -->
        </div>
      </div>

      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Testimonials</span></h3>
        </div>
        <div class="testimonials">
          <div class="active item">
            <blockquote>
              <p>TechNova's commitment to delivering outstanding results transformed our digital presence. Their team was professional, agile, and deeply insightful.</p>
            </blockquote>
            <div class="carousel-info">
              <img alt="" src="img/team4.jpg" class="pull-left">
              <div class="pull-left">
                <span class="testimonials-name">Ayesha Menon</span>
                <span class="testimonials-post">CTO, BrightMind Solutions</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
