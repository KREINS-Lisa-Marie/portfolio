<!--        OKAY für mich       -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web, Design, Web Designer HEPL">
    <meta name="author" content="Lisa-Marie Kreins">
    <meta name="description" content="La page portfolio de Lisa-Marie Kreins">

    <!--Flavicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/pf/flavicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/pf/flavicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/pf/flavicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/pf/flavicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/pf/flavicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/pf/flavicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/pf/flavicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/pf/flavicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/pf/flavicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/pf/flavicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/pf/flavicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/pf/flavicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/pf/flavicon/favicon-16x16.png">


<!--    <link rel="manifest" href="/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



   <!-- <link rel="stylesheet" href="./resources/css/styles.scss">-->
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
    <title><?= get_the_title() ?> - Portfolio</title>
</head>
<body>
<header class="header">
    <h1 class="sro"><?= get_the_title() ?></h1>
    <nav class="nav__header">
        <h2 class="sro"><?= __hepl('Navigation principale') ?></h2>
        <?php foreach (pll_the_languages(['raw' => true]) as $lang): ?>
            <!--On affiche uniquement la langue qui n'est PAS la langue actuelle-->
            <?php if ($lang['current_lang']): ?>
                    <a href="<?= esc_url( pll_home_url());?>"
                       lang="<?= $lang['locale'] ?>"
                       hreflang="<?= $lang['locale'] ?>"
                       class="languages__link nav__link__header"
                       title="<?= __hepl('Aller vers la page d’accueil') ?>">
                        <img src="/wp-content/themes/pf/resources/img/logo.svg" alt="Logo Lisa-Marie Kreins" width="30" height="24" class="logo_image">
                    </a>
            <?php endif; ?>
        <?php endforeach; ?>


<!--
        <a href="http://portfolio.test/" title="Aller vers la page d'accueil"> <img src="/wp-content/themes/pf/resources/img/logo.svg" alt="Logo Lisa-Marie Kreins" width="30" height="24" class="logo_image"></a>
-->
        <a href="#content" class="sro skip" title="Aller au contenu principal"><?= __hepl('Aller au contenu principal') ?></a>

        <input type="checkbox" id="burger_menu" name="burger_menu">
        <label for="burger_menu" class="burger_menu">
            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2H22" stroke="#000" stroke-width="2" stroke-linecap="square"/>
                <path d="M2 11H22" stroke="#000" stroke-width="2" stroke-linecap="square"/>
                <path d="M2 20H22" stroke="#000" stroke-width="2" stroke-linecap="square"/>
            </svg>
        </label>
        <ul class="nav__container__header">
            <?php foreach(dw_get_navigation_links('header') as $link): ?>
                <li class="nav__item__header">
                    <a href="<?= $link->href; ?>" class="nav__link__header" title="<?= __hepl('Aller vers la page ') ?>'<?=$link->label;?>'"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>

            <!-- On récupère toutes les langues-->
            <?php foreach (pll_the_languages(['raw' => true]) as $lang): ?>
                <!--On affiche uniquement la langue qui n'est PAS la langue actuelle-->
                <?php if (!$lang['current_lang']): ?>
                    <li class="nav__item__header">
                        <a href="<?= $lang['url'] ?>"
                           lang="<?= $lang['locale'] ?>"
                           hreflang="<?= $lang['locale'] ?>"
                           class="languages__link nav__link__header"
                           title="Changer la langue en <?= $lang['name'] ?>">
                            <?= $lang['slug'] ?><!-- Affiche le code de langue ('fr' ou 'de') -->
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>







           <!-- <?php /*foreach (pll_the_languages(['raw' => true]) as $lang): */?>
                <li class="languages__item<?php /*= $lang['current_lang'] ? ' languages__item--current' : '' */?>">
                    <a href="<?php /*= $lang['url'] */?>" lang="<?php /*= $lang['locale'] */?>" hreflang="<?php /*= $lang['locale'] */?>"
                       class="languages__link" title="<?php /*= __hepl('Changer la langue en') . $lang['name']*/?>"><?php /*= $lang['slug'] */?></a>
                </li>
            --><?php /*endforeach; */?>
        </ul>




    </nav>
</header>

<main id="content" itemscope itemtype="https://schema.org/Person">