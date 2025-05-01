</main>
<footer>

    <style type="text/css">

        /*
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
        */

    </style>

    <div class="related_links">
        <div class="bottom_nav">
            <h2 class="nav_footer_title">Navigation</h2>
            <nav class="nav__footer">
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
                </li class=" socials_link">
            </ul>
        </div>
    </div>
    <a href="http://portfolio.test/contact/" title="Aller vers la page contact" class="contact__button">
        Contactez-moi
    </a>
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