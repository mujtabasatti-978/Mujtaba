<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> ./style.css">
<?php get_header(); ?>

<div class="top-heading">


  <div class="container top-site-heading ">

    <div class="h2_before"></div>
    <h2>
      <?php the_title() ?>
    </h2>

  </div>
</div>



<section class="container About success_story">
<?php wp_title('Home /', true); ?>
  <div class="row">
    <div class="col-6 about success-story success_story">
      <h3>ABOUT </h3>
      <h2>Our Success Story</h2>
      <p>AbdulAcademy transcends the conventional bounds of an educational institution; it stands as a remarkable force.
        Across the past three decades, AbdulAcademy has achieved remarkable milestones, boasting an extensive network
        encompassing Schools, Colleges, Evening Coaching, Entry Test Preparation, Competitive Exam Preparation, Foreign
        Test Preparation, School of Languages, and Publications. Its track record includes a cohort of accomplished
        students and professionals nationwide and internationally. The key components of AbdulAcademy's triumph include
        a highly proficient faculty, purpose-built campuses with cutting-edge facilities, and a comprehensive quality
        assurance system.</p>
      <p>discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of “de Finibus Bonorum
        et Malorum” (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory
        of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..”,
        comes from a line in section 1.10.32.</p>




    </div>
    <div class="col-6 about picture">
      <div class="academy-pic story">
      </div>
      <div class="learner story"></div>
    </div>
  </div>
</section>
<section class="mission-sec">

<div class="container success-story  ">
  <h3>ABOUT </h3>
  <h2>Vision & Mission</h2>
  <div class="row vision-mission">
    <div class="col-12 vision">
      <div class="col-1 vision-image"><i class="fa-solid fa-pen-nib"></i></div>
      <div class="col-11 vision-content">
        <h3>Vision</h3>
        <p>Developing the nation through quality education in such a way to uplift the image of Pakistan and Pakistanis
          among the Muslim and International World in Science, Research, Technology and Arts. </p>
      </div>
    </div>
  </div>
  <div class="row vision-mission">
    <div class="col-12 mission">
      <div class="col-1 mission-image"><i class="fa-solid fa-award"></i></div>
      <div class="col-11 mission-content">
        <h4>Mission</h4>
        <p>Developing the nation through quality education in such a way to uplift the image of Pakistan and Pakistanis
          among the Muslim and International World in Science, Research, Technology and Arts. </p>
        </p>
      </div>
    </div>
  </div>
  <div class="row vision-mission">
    <div class="col-12 corevalues">
      <div class="col-1 corevalues-image"><i class="fa-brands fa-readme"></i></div>
      <div class="col-11 corevalues-content">
        <h3>Core Values</h3>
        <p>Culture of respects & care for all (Students, Parents, Staff & Fellows)
          Developing and promoting an environment of learning for all.
          Appreciating the good deeds and guiding deficiencies through training.
          Giving an opportunity to all to express and nurture abilities by members.</p>
      </div>
    </div>
  </div>
</div>
</section>


<?php get_footer(); ?>