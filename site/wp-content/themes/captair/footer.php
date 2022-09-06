<footer class="footer">
    <section class="footer__body">
        <svg class="footer__svg" width="2040" height="476" viewBox="0 0 2040 476" fill="none" >
            <path d="M1740 9.9992C1450.6 114.641 1423.17 168.606 1216.18 119.72C1074.23 86.1944 914.286 203.027 731.849 161.374C549.412 119.72 414.5 112 300 161.236C142 262.499 113 345.999 0 475.999H2040C1934 269.499 1997 -61 1740 9.9992Z" fill="url(#paint0_linear_123_1566)" fill-opacity="0.5"/>
            <defs>
                <linearGradient id="paint0_linear_123_1566" x1="1201" y1="48.7541" x2="1079.95" y2="451.708" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#89AC26"/>
                    <stop offset="1" stop-color="#326FB5" stop-opacity="0.8"/>
                </linearGradient>
            </defs>
        </svg>
        <h2 class="footer__title hidden">Footer</h2>
        <div class="footer__container">
            <div class="footer__part">
                <h3 class="footer__subtitle">Navigation</h3>
                <ul class="footer__list">
                    <?php foreach (captair_get_menu_items('primary') as $link): ?>
                        <li class="footer__item">
                            <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?>class="footer__link animatedLink"><?= $link->label; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle">HEPL</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="mailto:valery.broun@hepl.be" class="footer__link animatedLink">valery.broun@hepl.be</a></li>
                    <li class="footer__item"><a href="mailto:sylvain.guichaux@hepl.be" class="footer__link animatedLink">sylvain.guichaux@hepl.be</a></li>
                    <li class="footer__item"><a href="mailto:christophe.brose@hepl.be" class="footer__link animatedLink">christophe.brose@hepl.be</a></li>
                    <li class="footer__item"><a href="https://www.hepl.be/fr"target="_blank" class="footer__link animatedLink">Site web</a></li>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle">ISSEP</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="mailto:f.lenartz@issep.be" class="footer__link animatedLink">f.lenartz@issep.be</a></li>
                    <li class="footer__item"><a href="https://www.issep.be"target="_blank" class="footer__link animatedLink">Site web</a></li>
                    <li class="footer__item"><a href="https://be.linkedin.com/company/issep"target="_blank" class="footer__link animatedLink">Linkedin</a></li>
                    <li class="footer__item"><a href="https://www.facebook.com/Institut.Issep/"target="_blank" class="footer__link animatedLink">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__mentions reveal-2">
            <a href="<?= get_the_permalink(captair_get_template_page('template-mentions')); ?>" class="footer__mentionsLink animatedLink">Mention légales</a>
        </div>
    </section>
    <script type="text/javascript" src="<?= captair_mix('js/script.js'); ?>"></script>
</footer>
</body>
</html>