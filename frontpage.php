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
    ), url(http://fathers-day.local/wp-content/uploads/2021/06/FD_bg.png);
     background-position: center center;
     height: 60vh;">

        <div class="content-middle text-white text-center">
            <h1 class="text-6xl mb-2"><span class="hidden md:inline">-</span> <?php the_field('title'); ?> <span
                        class="hidden md:inline">-</span></h1>
            <h2 class="text-2xl mb-2">From Foothills Church</h2>
            <i class="text-2xl fas fa-hammer"></i>
        </div>
    </div>


    <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
        <div class="grid grid-cols-12">
            <div class="col-span-12 p-5">
                <h2 class="text-2xl mb-2 uppercase">Thank you for celebrating Father's Day with us!</h2>
                <p class="text-left">We’re so thankful for all of the dads that make Foothills Church such an incredible
                    place. We hope that you feel seen and appreciated for all that you do!</p>
            </div>
            <div class="col-span-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 p-5">
                <h2 class="text-2xl mb-2 uppercase">How to access your photos</h2>
            </div>
            <div class="col-span-12 md:col-span-4">
                <h3 class="text-4xl mb-5 text-center mx-2">1</h3>
                <hr>
                <h4 class="text-2xl mt-3 capitalize text-left mx-2 font-black">Select Your Service</h4>
                <p class="mx-2 text-left">Click the tabs below to filter what service you had your photo taken at.</p>
            </div>

            <div class="col-span-12 md:col-span-4">
                <h3 class="text-4xl mb-5 text-center mx-2">2</h3>
                <hr>
                <h4 class="text-2xl mt-3 capitalize text-left mx-2 font-black">Download Your Photo</h4>
                <p class="mx-2 text-left">Find your photo from the list below and click the download button!</p>
            </div>

            <div class="col-span-12 md:col-span-4">
                <h3 class="text-4xl mb-5 text-center mx-2">3</h3>
                <hr>
                <h4 class="text-2xl mt-3 capitalize text-left mx-2 font-black">Share them on Socials</h4>
                <p class="mx-2 text-left">Tag us @foothillschurchtn on Instagram and Facebook!</p>
            </div>
        </div>
    </div>

    <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">9AM</label>
        <div class="tab">

            <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
                <div class="grid grid-cols-12 gap-4">
                    <?php
                    // Start the Repeater Loop
                    if (have_rows('9am_gallery')):
                        // Card Start
                        // Begin looping data
                        while (have_rows('9am_gallery')) : the_row();
                            ?>

                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <img src="<?php the_sub_field('image');?>"
                                     alt="Father's Day Photo - 9am">
                                <a href="<?php the_sub_field('image');?>" download><div class="text-left pt-2"><i class="fas fa-download"></i> Click to Download</div></a>

                            </div>

                        <?php
                        endwhile;
                    else :
                        // no rows found
                    endif;
                    ?>

                </div>
            </div>

        </div>

        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">In Between</label>
        <div class="tab">

            <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80"
                             alt="">
                        <div class="text-left pt-2"><i class="fas fa-download"></i> Click to Download</div>
                    </div>
                </div>
            </div>

        </div>

        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree">11AM</label>
        <div class="tab">
            <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80"
                             alt="">
                        <div class="text-left pt-2"><i class="fas fa-download"></i> Click to Download</div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php
get_footer();