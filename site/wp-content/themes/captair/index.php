<?php get_header(); ?>

    <div class="header__cta">
        <div class="cta__container">
            <div class="cta__text">
                <p class="cta__title"><?= get_field('cta_title') ?></p>
                <p class="cta__description"><?= get_field('cta_description') ?></p>
                <div class="cta__logos">
                    <img src="<?= get_field('cta_logo_inge')['url'] ?>" alt="<?= get_field('cta_logo_inge')['alt'] ?>"
                         class="cta__logo">
                    <img src="<?= get_field('cta_logo_issep')['url'] ?>" alt="<?= get_field('cta_logo_issep')['alt'] ?>"
                         class="cta__logo">
                    <img src="<?= get_field('cta_logo_hepl')['url'] ?>" alt="<?= get_field('cta_logo_hepl')['alt'] ?>"
                         class="cta__logo">
                </div>
            </div>
            <div class="cta__illustration">
                <img src="<?= get_field('cta_illustration')['url'] ?>" alt="<?= get_field('cta_illustration')['alt'] ?>"
                     class="cta__img">
            </div>
        </div>
    </div>
    </header>
    <main class="layout">
        <div class="layout__captair captair">
            <section class="captair__container">
                <h2 class="captair__title hidden">Captair</h2>
                <img src="<?= get_field('intro_logo')['url'] ?>" alt="<?= get_field('intro_logo')['alt'] ?>"
                     class="captair__img">
                <p class="captair__text"><?= get_field('intro_text') ?></p>
                <a href="<?= get_field('intro_link')['url'] ?>"
                   class="captair__link abutton"><?= get_field('intro_link')['title'] ?></a>
            </section>
        </div>
        <div class="layout__collabo collabo">
            <section class="collabo__container">
                <div class="collabo__illustration">
                    <img src="<?= get_field('collabo_img')['url'] ?>" alt="<?= get_field('collabo_img')['alt'] ?>" class="collabo__img">
                </div>
                <div class="collabo__textContainer">
                    <h2 class="collabo__title"><?= get_field('collabo_title') ?></h2>
                    <p class="collabo__subtitle"><?= get_field('collabo_subtitle') ?></p>
                    <p class="collabo__text"><?= get_field('collabo_text') ?></p>
                    <p class="collabo__subtitle"><?= get_field('collabo_subtitle_2') ?></p>
                    <p class="collabo__text callabo__textLast"><?= get_field('collabo_text_2') ?></p>
                    <a href="<?= get_field('collabo_link')['url'] ?>"
                       class="collabo__link abutton"><?= get_field('collabo_link')['title'] ?></a>
                </div>
            </section>
        </div>
        <div class="layout__ctaContact ctaContact">
            <section class="ctaContact__container">
                <h2 class="ctaContact__title"><?= get_field('contact_title') ?></h2>
                <p class="ctaContact__text"><?= get_field('contact_text') ?></p>
                <a href="<?= get_field('contact_link')['url'] ?>"
                   class="ctaContact__link abutton"><?= get_field('contact_link')['title'] ?></a>
            </section>
        </div>
    </main>

<?php get_footer(); ?>