<?php /* Template Name: contact template */ ?>
<?php get_header(); ?>
    </header>
    <main class="layout contact">
        <section class="contactIntro__container">
                <h1 class="contactIntro__title"><?php the_field('title') ?></h1>
                <p class="contactIntro__description"><?php the_field('description') ?></p>
        </section>
    </main>
<?php get_footer(); ?>