</main>
<footer>
    <h2>Navigation</h2>
    <nav class="nav__footer">
        <ul class="nav__container__footer">
            <?php foreach(dw_get_navigation_links('footer') as $link): ?>
                <li class="nav__item__footer nav__item--<?= $link->icon; ?>">
                    <a href="<?= $link->href; ?>" class="nav__link_footer"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <!--<p>© <?php /*= get_bloginfo('name'); */?></p>-->
    <h2>
        Réseaux sociaux
    </h2>
    <ul>
        <li>
            <a href="#">Instagram</a>
        </li>
        <li>
            <a href="#">Facebook</a>
        </li>
        <li>
            <a href="#">Linkedin</a>
        </li>
    </ul>
    <a href="http://portfolio.test/contact/" title="Aller vers la page contact">
        Contactez-moi
    </a>
    <p>
        © 2025 Kreins Lisa-Marie. Tous droits réservés. Crée par Kreins Lisa-Marie.
    </p>
    <p>
        <a href="http://portfolio.test/privacy-policy/ ">Mentions légales</a>
    </p>
</footer>
</body>
</html>