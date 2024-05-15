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



<div class="container">
<?php wp_title('Home /', true); ?>
    <div class="row">
       <div class="col-12">
       <p>
       Abdul Academy has gained a reputation for delivering authentic outcomes in both Matric and Inter levels. Since the establishment of Abdul Academy, our students consistently secure top positions in various boards, such as Federal, Rawalpindi, AJK, Punjab, and others. These remarkable achievements are attributed to our exceptionally qualified faculty, widely recognized for their excellence in preparing students for entry tests as well.
        </p>
       </div>
    </div>
</div>



<?php get_footer();  ?>
  
   
 
