<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="./resources/css/styles.scss">-->
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
</head>
<body>
<header class="header">
    <h1><?= get_bloginfo('name') ?></h1>
    <p><?= get_bloginfo('description') ?></p>

    <nav class="nav__header">
        <h2 class="sro">Navigation pricinpale</h2>
        <ul class="nav__container__header">
            <?php foreach(dw_get_navigation_links('header') as $link): ?>
                <li class="nav__item__header nav__item--<?= $link->icon; ?>">
                    <a href="<?= $link->href; ?>" class="nav__link__header"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main>

