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
<div class="col-6 address">
    <div class="col-12 phone">
        <div class="icon-phone"><i class="fa-solid fa-phone"></i></div>
        <h4>
            Phone
        </h4>
        <p> Campus-I : 051-4848385, 0309-8889711-6</p>
       
    </div>
    <div class="col-12 E-mail">
        <div class="icon-email"><i class="fa-solid fa-envelope"></i></div>
        <h4>
            Email
        </h4>
        <p><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=userid@gmail.com&tf=1
          "> userid@gmail.com</a></p>

    </div>
</div>
<div class="col-6 contact-form">
    <h2>SEND A MESSAGE</h2>
    <p>Your email address will not be published. Required fields are marked.</p>
    <div class="under_line"></div>

    <?php the_content() ?>
</div>
</div>
<div class="row">
    <div class="col-12 location-addres">
        <div class="location_icon"><i class="fa-solid fa-location-dot"></i></div>
        <h4>Address</h4>
        <p>Campus III (Wan Cant) : A-05,The Mall, Lalarukh, Near Basti Stop, Quaid Avenue, Wah Cant.</p>
       
    </div>
</div>
</div>

<div class="container">
    <div class="row">
    <div class="col-12 map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830.5477102771492!2d73.12149876950329!3d33.62629341502686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfeb003a89d617%3A0xb06d90eb897fc99a!2sNazir%20Satti%20Plaza!5e0!3m2!1sen!2s!4v1707582921205!5m2!1sen!2s" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    </div>
</div>



<?php get_footer(); ?>


