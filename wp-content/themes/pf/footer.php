</main>
<footer>
    <div class="footer_links_container">
        <div class="related_links_container">
            <nav class="nav__footer">
                <h2 class="nav_footer_title"><?= __hepl('Navigation') ?><span class="sro"><?= __hepl('de bas de page') ?></span></h2>
                <ul class="nav__container__footer">
                    <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                        <li class="nav__item__footer">
                            <a href="<?= $link->href; ?>" class="nav__link_footer"><?= $link->label; ?></a>
                        </li>
                    <?php endforeach; ?>

                    <!-- On récupère toutes les langues-->
                    <?php foreach (pll_the_languages(['raw' => true]) as $lang): ?>
                        <!--On affiche uniquement la langue qui n'est PAS la langue actuelle-->
                        <?php if (!$lang['current_lang']): ?>
                            <li class="nav__item__footer">
                                <a href="<?= $lang['url'] ?>"
                                   lang="<?= $lang['locale'] ?>"
                                   hreflang="<?= $lang['locale'] ?>"
                                   class="nav__link_footer footer_language"
                                   title="Changer la langue en <?= $lang['name'] ?>">
                                    <?= $lang['slug'] ?><!-- Affiche le code de langue (ex: 'en', 'fr') -->
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="socials_container">
                <h2 class="nav_footer_title">
                    <?= __hepl('Réseaux sociaux') ?>
                </h2>
                <ul class="socials_list">
                    <li class="socials_link_item">
                        <a href="https://www.instagram.com/lisa.marie2601/">Instagram</a>
                    </li>
                    <li class="socials_link_item">
                        <a href="https://www.facebook.com/lisamarie.kreins.5">Facebook</a>
                    </li>
                    <li class="socials_link_item">
                        <a href="https://fr.linkedin.com/">Linkedin</a>
                    </li>
                </ul>
            </div>

            <div class="contact_with_arrow_container more_contact_container">
                <a href="<?= get_field('change_page_link'); ?>" title="Aller vers la page 'Contact'"
                   class="link_contact_me">
                    <?= __hepl('Contactez-moi') ?>
                    <svg width="32" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 28"
                         class="arrow_contact">
                        <path class="st0" d="M2.2,13.3h28M30.2,13.3L16.2,2.3M30.2,13.3l-14,11.1"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
        <div class="legal_info" itemscope itemtype="https://schema.org/Person">
            <p>
                © 2025 <span itemprop="familyName">Kreins</span> <span itemprop="givenName">Lisa-Marie</span>.  <?= __hepl('Tous droits réservés. Crée par ') ?><span itemprop="familyName">Kreins</span> <span itemprop="givenName">Lisa-Marie</span>.
            </p>
            <p>
                <a href="http://portfolio.test/privacy-policy/ " title="Aller vers la page 'Mentions légales'"><?= __hepl('Mentions légales') ?></a>
            </p>
        </div>
</footer>
</body>
</html>