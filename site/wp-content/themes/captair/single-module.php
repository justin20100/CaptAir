<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    </header>
    <main class="layout__singleModule singleModule">
        <section class="singleModule__container">
            <h1 class="singleModule__title hidden"><?= get_field('title'); ?></h1>
            <div class="singleModule__illustration">
                <img src="<?= get_field('big_image')['url'] ?>" alt="<?= get_field('big_image')['alt'] ?>" class="singleModule__img">
                <img src="<?= get_field('small_image_left')['url'] ?>" alt="<?= get_field('small_image_left')['alt'] ?>" class="singleModule__img">
                <img src="<?= get_field('small_image_right')['url'] ?>" alt="<?= get_field('small_image_right')['alt'] ?>" class="singleModule__img">
            </div>
            <div class="singleModule__text">
                <p class="singleModule__title"><?= get_field('title'); ?></p>
                <p class="singleModule__description"><?= get_field('description'); ?></p>
                <h2 class="singleModdule__subtitle"><?= get_field('subtitle') ?></h2>
                <table class="singleModule__table">
                    <thead>
                    <tr>
                        <?php foreach (get_field('table') as $color): ?>
                            <th><?= $color ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php foreach (get_field('table') as $choice): ?>
                            <td>oui</td>
                        <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
                <h2 class="singleModdule__subtitle"><?= get_field('subtitle_2') ?></h2>
                <p class="singleModule__caracteristic"><?= get_field('caracteristics') ?></p>
            </div>
        </section>
        <div class="layout__question question">
            <section class="question__container">
                <h2 class="question__title">Des questions ?</h2>
                <p class="question__text">Un formulaire de contacte est mis a votre disposition pour poser des questions adressées a la personne la plus apte a vous répondre</p>
                <a href="<?= get_the_permalink(captair_get_template_page('template-contact')); ?>" class="question__link">Contactez-nous</a>
            </section>
        </div>
        <div class="layout__others others">
            <section class="others__container">
                <h2 class="others__title"></h2>
                <?php $module= get_field('title'); ?>
                <?php if (($modules = captair_get_modules())->have_posts()): while ($modules->have_posts()): $modules->the_post(); ?>
                <?php if (get_field('title') != $module): ?>
                    <div class="otherCard">
                        <section class="otherCard__container">
                            <h3 class="otherCard__title"><?= get_the_title(); ?></h3>
                            <p class="otherCard__text"><?= get_field('description_small') ?></p>
                            <a href="<?= get_the_permalink(); ?>" class="otherCard__link">Voir <?= get_the_title(); ?></a>
                        </section>
                    </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p class="others__empty">Il n’y a pas de modules sur cette page</p>
                <?php endif; ?>
            </section>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>