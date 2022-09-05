<?php /* Template Name: devices template */ ?>

<?php get_header(); ?>
</header>
<main class="layout">
    <section class="layout__modules modules">
        <h1 class="modules__title"><?= get_field('title') ?></h1>
        <p class="modules__text"><?= get_field('description') ?></p>
        <div class="modules__container">
            <?php
            if (($modules = captair_get_modules())->have_posts()): while ($modules->have_posts()): $modules->the_post(); ?>
                <div class="moduleCard">
                    <section class="moduleCard__container">
                        <h3 class="moduleCard__title"><?= get_the_title(); ?></h3>
                        <p class="moduleCard__text"><?= get_field('description_small') ?></p>
                        <a href="<?= get_the_permalink(); ?>" class="moduleCard__link">Voir <?= get_the_title(); ?></a>
                    </section>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <p class="modules__empty">Il n’y a pas de modules sur cette page</p>
            <?php endif; ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>

