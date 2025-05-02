<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="./resources/css/styles.scss">-->
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
    <title><?= get_the_title() ?> - Portfolio</title>
</head>
<body>
<header class="header">
    <h1 class="screenreader__only"><?= get_the_title() ?></h1>
<!--    <figure class="logo">
        <?php /*= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'logo__img']); */?>
    </figure>-->
    <img src="./resources/img/logo.svg" alt="Logo Lisa-Marie Kreins" width="auto" height="24">
    <nav class="nav__header">
        <h2 class="sro">Navigation pricinpale</h2>

        <a href="#content" class="sro">Aller au contenu principal</a>

        <input type="checkbox" id="burger_menu">
        <label for="burger_menu" class="burger_menu">
            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2H22" stroke="#38312F" stroke-width="3" stroke-linecap="round"/>
                <path d="M2 11H22" stroke="#38312F" stroke-width="3" stroke-linecap="round"/>
                <path d="M2 20H22" stroke="#38312F" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </label>
        <ul class="nav__container__header">
            <?php foreach(dw_get_navigation_links('header') as $link): ?>
                <li class="nav__item__header nav__item--<?= $link->icon; ?>">
                    <a href="<?= $link->href; ?>" class="nav__link__header"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main id="content">