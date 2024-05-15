<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdul Academy</title>

    <?php wp_head(); ?>

</head>

<nav class="top-nav " id="top-nav">


    <div class="row top-nav-bar ">

        <div class="col-2 logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/abdullogo.png" alt="logo"
                    width="100%" height="auto">
            </a>
        </div>
        <div class="col-10 menu-nav-bar menu-bar ">

            <input type="checkbox" name="check" id="checkbox">
            <label class="burger" id="check" for="checkbox"><i class="fa fa-bars"></i></label>


           
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                <!--  <li class="links "><a class="home-btn nav_link " href="">Home</a></li>
                <li class="links"><a href="" class="nav_link">About</a></li>


                <li class="dropdown  ">
                    <button class="dropbtn links "><a href="" class="nav_link">Evening Coaching <i
                                class="fa fa-caret-down"></i></a>

                    </button>
                    <div class="dropdown-content ">
                        <a href="#" class="drop-down_link">Introduction</a>
                        <a href="#" class="drop-down_link">Sessions Offered</a>
                        <a href="#" class="drop-down_link">Why AbdulAcademy?</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn links"><a href="" class="nav_link">Achivements <i
                                class="fa fa-caret-down"></i> </a>

                    </button>
                    <div class="dropdown-content">
                        <a href="#" class="drop-down_link">Federal Board Results</a>
                        <a href="#" class="drop-down_link">Rawalpindi Board Results</a>
                        <a href="#" class="drop-down_link">Entry Test Results</a>
                    </div>
                </li>
                <li class="links"><a href="" class="nav_link">Contact</a></li>-->
          


        </div>
    </div>
</nav>