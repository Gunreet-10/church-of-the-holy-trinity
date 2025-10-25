<?php

/**
 * Template Name: Front Page
 * Description: Custom static homepage for Church of the Holy Trinity
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Welcome to Church of the Holy Trinity</h1>
            <p>We’re glad you’re here. This is our new website under development.</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <?php
            // Display page content if it exists
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>Content coming soon.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>