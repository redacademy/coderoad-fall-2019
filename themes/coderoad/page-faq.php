<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="site-container">

    <!-- <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!--.entry-header -->

    <section class="faq-h2-container">
        <h2 class="faqh2">FAQ</h2>
    </section>

    <!-- <div class="search-container">
        <form action=""></form>
    </div> -->

    <section class="tutorial-container">
        <div class="tutorial-h2">
            <h2>Tutorials/ Creating</h2>
            <!-- <div class="tutorial-accent"></div> -->
        </div>

        <div class="link-container">
            <a href="<?php echo get_home_url()?>/faq-response1/">Where an I see my progress ?</a>
            <a href="<?php echo get_home_url()?>/faq-response2/">How do I create a tutorial ?</a>
            <a href="<?php echo get_home_url()?>/faq-response3">Can I edit my posted tutorial ?</a>
        </div>
    </section>

    <section class="profile-container">
        <div class="profile-h2">
            <h2>Profile/ Account</h2>
            <div class="profile-accent"></div>
        </div>
        <div class="link-container">
            <a href="<?php echo get_home_url()?>/faq-response4">How do I change my profile picture ?</a>
            <a href="<?php echo get_home_url()?>/faq-response5">How do I change my password ?</a>
        </div>

    </section>

</div>
<?php get_footer(); ?>