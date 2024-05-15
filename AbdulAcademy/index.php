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
    <div class="row">
       <div class="col-12">
       <?php the_content(); ?>
       </div>
    </div>
</div>



<?php get_footer();  ?>
  
   
 
