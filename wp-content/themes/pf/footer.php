</main>
<footer>

    <style type="text/css">

        footer{
            font-size: 14px;
        }
        h2{
            font-weight: 700;
        }
        a{
            font-weight: 500;
        }
        .nav__container__footer{
            padding-left: 0;
            list-style-type: none;
        }
        .nav__container__footer a{
            padding-top: 16px;
        }

    </style>

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
            <a href="https://www.instagram.com/lisa.marie2601/">Instagram</a>
        </li>
        <li>
            <a href="https://www.facebook.com/lisamarie.kreins.5">Facebook</a>
        </li>
        <li>
            <a href="https://fr.linkedin.com/">Linkedin</a>
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