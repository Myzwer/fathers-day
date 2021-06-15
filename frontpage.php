<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Wordpack Theme
 * @since 1.0.0
 */

get_header(); ?>


    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.15),
      rgba(0, 0, 0, 0.15)
    ), url(http://fathers-day.local/wp-content/uploads/2021/06/Test-Gradient.jpg);
     background-position: center center;
     height: 60vh;">

        <div class="content-middle text-white text-center">
            <h1 class="text-6xl mb-2"><span class = "hidden md:inline">-</span> Happy Fathers Day! <span class = "hidden md:inline">-</span></h1>
            <h2 class="text-2xl mb-2">From Foothills Church</h2>
            <i class="text-2xl fas fa-hammer"></i>
        </div>
    </div>




<?php
get_footer();