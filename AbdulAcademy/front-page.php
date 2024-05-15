<body>
  <a href="https://api.whatsapp.com/send?phone=+92 336 4812210&text=I am Interested in knowing your Courses please provide further details"
    class="float" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
  <?php get_header(); ?>



  <div class="landing-page">


    <div class="w3-content w3-section" style="max-width:1440px">

      <?php
      $args = array(
        'post_type' => 'post',
        // Order the results randomly
        'posts_per_page' => -1,
        'category_name' => 'uncategorized'
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          // Display each post here
          ?>
          <div class="mySlides firt-page background-img">
            <div class="text">
              <h4>Welcome to AbdulAcademy</h4>
              <a href="<?php the_permalink(); ?>">
                <h1>
                  <?php the_title(); ?>
                </h1>
              </a>
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>

          </div>

          <?php

        }
        wp_reset_postdata();

      } else {
        // No posts found
      }

      ?>

      <div class="mySlides fourth-page background-img">
        <div class="text">
        </div>
      </div>
    </div>


  </div>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Admission Open!</strong> Starting from 1st JAN. 2024
  </div>

  <section class="container About">
    <div class="row">
      <div class="col-6 about success-story">
        <h3>ABOUT </h3>
        <h2>Our Success Story</h2>
        <p>AbdulAcademy transcends the conventional bounds of an educational institution; it stands as a remarkable
          force. Across the past three decades, AbdulAcademy has achieved remarkable milestones, boasting an extensive
          network encompassing Schools, Colleges, Evening Coaching, Entry Test Preparation, Competitive Exam
          Preparation, Foreign Test Preparation, School of Languages, and Publications. Its track record includes a
          cohort of accomplished students and professionals nationwide and internationally. The key components of
          AbdulAcademy's triumph include a highly proficient faculty, purpose-built campuses with cutting-edge
          facilities, and a comprehensive quality assurance system.</p>
        <button class="read-more"><a href="http://localhost/wordpress/about/">Read More</a></button>
      </div>
      <div class="col-6 about picture">
        <div class="academy-pic story">
        </div>
        <div class="learner story"></div>
      </div>
    </div>
  </section>

  <section class="container teachers">

    <div class="row profile">
      <div class="owl-carousel">

        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category_name' => 'testinomials'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            // Display each post here
            ?>
            <div>
              <div class="col-5 profile-picture">
                <div class="pictre">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              </div>
              <div class="col-7 description">
                <?php the_content(); ?>
              </div>
            </div>
            <?php

          }
          wp_reset_postdata();

        } else {
          // No posts found
        }

        ?>

      </div>

    </div>
  </section>

  <section class="container carear-conelling">
    <div class="row">
      <div class="col-4 welcome conselling">
        <h2>Welcome !</h2>
        <div class="under-line"></div>
        <p>Abdul Academy is one of the fastest growing educational institutes in twin cities. Through its quality
          education and innovative teaching methodology Torcia augmented the trust of students and parents. Torcia
          propel students to develop and enhance their proficient skills and abilities.</p>
      </div>
      <div class="col-4 career conselling">
        <h2>Career Counselling</h2>
        <div class="under-line"></div>
        <p>Our Career Counselling and career mapping sessions help students to choose their educational and professional
          careers that best fit their personality. Torcia’s career counselors are highly qualified and well trained for
          understanding the students psyche and their issues. They possess the attributes and skills like effective
          communication, empathy, flexibility and multicultural competency.</p>
      </div>
      <div class="col-4 virtual-tour conselling">
        <h2>Virtual Tour</h2>
        <div class="under-line"></div>
        <p>
          <video width="100%" controls>
            <source src="" type="video/mp4">
            Your browser does not support HTML video.
          </video>
        </p>
      </div>
    </div>
  </section>



  <section class="container methodology-acadmy">
    <div class="row why-abdul-academy">
      <div class="col-12 discover">
        <h3>DISCOVER</h3>
        <h2>Why Abdul Academy</h2>
        <p>AbdulAcademy has reached unprecedented achievements, pioneered numerous innovations, and established
          unparalleled benchmarks in the field of education.</p>
      </div>
    </div>
    <div class="row row-methodology">
      <div class="col-12 why-abdul">
        <?php
        $args = array(
          'post_type' => 'post',
          'orderby' => 'rand',
          'posts_per_page' => 3,
          'category_name' => 'discover'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            // Display each post here
            ?>





            <div class="col-4 sllaybus rows-methodology">

              <div class="syllabus-img methodology">
                <?php the_post_thumbnail('small') ?>
              </div>
              <div class="content methodology">
                <?php the_content() ?>
              </div>
            </div>

            <?php

          }
          wp_reset_postdata();

        } else {
          // No posts found
        }

        ?>

      </div>
    </div>
    <div class="row row-methodology">
      <div class="col-12 why-abdul">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'rand',
          'category_name' => 'discover'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            // Display each post here
            ?>

            <div class="col-4 sllaybus rows-methodology">

              <div class="syllabus-img methodology">
                <?php the_post_thumbnail('small') ?>
              </div>
              <div class="content methodology">
                <?php the_content() ?>
              </div>
            </div>

            <?php

          }
          wp_reset_postdata();

        } else {
          // No posts found
        }

        ?>

      </div>
    </div>
    <div class="row row-methodology">
      <div class="col-12 why-abdul">
        <?php
        $args = array(
          'post_type' => 'post',
          'orderby' => 'rand',
          'posts_per_page' => 3,
          'category_name' => 'discover'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            // Display each post here
            ?>





            <div class="col-4 sllaybus rows-methodology">

              <div class="syllabus-img methodology">
                <?php the_post_thumbnail('small') ?>
              </div>
              <div class="content methodology">
                <?php the_content() ?>
              </div>
            </div>

            <?php

          }
          wp_reset_postdata();

        } else {
          // No posts found
        }

        ?>

      </div>
    </div>







  </section>




  <?php get_footer(); ?>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 5000);
    }

    $(document).ready(function () {
  $(".owl-carousel").owlCarousel({

    items: 1,
    autoPlay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      }
    }
  });


});






  </script>





</body>

</html>