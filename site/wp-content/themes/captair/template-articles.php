<?php /* Template Name: articles template */ ?>
<?php get_header()?>
</header>
<main class="layout">
    <div class="layout__articles articles">
        <section class="articles__container">
            <h2 class="articles__title"><?= get_field('title') ?></h2>
            <p class="articles__text"><?= get_field('description') ?></p>
            <div class="articles__list">

                <?php if (($articles = captair_get_articles())->have_posts()): while ($articles->have_posts()): $articles->the_post(); ?>
                    <article class="article__container">
                        <img src="<?= get_the_post_thumbnail_url()?>" alt="<?= get_the_post_thumbnail_caption()?>" class="article__img">
                        <div class="article__text">
                            <h3 class="article__title"><?= get_the_title() ?></h3>
                            <p class="article__description"><?= get_the_excerpt() ?></p>
                            <a href="<?= get_field('link')['url'] ?>" class="article__link"><?= get_field('link')['title'] ?></a>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php else: ?>
                    <p class="modules__empty">Il n’y a pas d'articles disponible pour l'instant.</p>
                <?php endif; ?>

            </div>
        </section>
    </div>
</main>
<?php get_footer() ?>