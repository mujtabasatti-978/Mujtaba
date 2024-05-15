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



<section class="result_section">
<div class="container">


<div class="row">
    
<?php
    $args = array(
      'post_type' => 'wporg_results',
      'posts_per_page' => -1,
      'category_name' => 'federal-board'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?> 

  <div class="col-4 result_card">
   <div class="contnt">
   <div class="testinomial_result">
   <div class="col-6 profile-pic">
    <?php the_post_thumbnail('medium') ?>
    </div>
  <div class="col-6 content-result">
  <p><?php the_title() ?></p>
  <?php  the_content(); ?>
  </div>
   </div>
  <div class="year">
    <?php the_excerpt() ?>
  </div>
   </div>
  </div>
  <?php

      }
      wp_reset_postdata();

    } else {
    }

    ?>
    <div class="col-4 result_card">
      </div>
</div>
</div>
</section>


<?php get_footer();  ?>
  
   
 
