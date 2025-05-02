</main>
<footer>
    <div class="related_links">
        <div class="bottom_nav">
            <h2 class="nav_footer_title">Navigation</h2>
            <nav class="nav__footer">
                <h3 class="sro">Navigation de bas de page</h3>
                <ul class="nav__container__footer">
                    <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                        <li class="nav__item__footer nav__item--<?= $link->icon; ?>">
                            <a href="<?= $link->href; ?>" class="nav__link_footer"><?= $link->label; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <!--<p>© <?php /*= get_bloginfo('name'); */ ?></p>-->
        <div class="socials">
            <h2 class="nav_footer_title">
                Réseaux sociaux
            </h2>
            <ul class="socials_list">
                <li class=" socials_link">
                    <a href="https://www.instagram.com/lisa.marie2601/">Instagram</a>
                </li>
                <li class=" socials_link">
                    <a href="https://www.facebook.com/lisamarie.kreins.5">Facebook</a>
                </li class=" socials_link">
                <li>
                    <a href="https://fr.linkedin.com/">Linkedin</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="contact_with_arrow">
        <a href="http://portfolio.test/contact/" title="Aller vers la page contact" class="contact__button">
            Contactez-moi
        </a><a href="http://portfolio.test/contact/" class="arrow_footer">
            <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 13.9993H30M30 13.9993L16 2.91602M30 13.9993L16 25.0827" stroke-width="4"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a></div>
    <div class="legal_info">
        <p>
            © 2025 Kreins Lisa-Marie. Tous droits réservés. Crée par Kreins Lisa-Marie.
        </p>
        <p>
            <a href="http://portfolio.test/privacy-policy/ ">Mentions légales</a>
        </p></div>
</footer>
</body>
</html>