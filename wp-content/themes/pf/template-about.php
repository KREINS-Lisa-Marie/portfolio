<?php /* Template Name: Page "À propos" */ ?>
<!--commentaire pour dire à WP que c'est un fichier template -->

<!--La classe "sro" est une classe pour "screenreader-only"-->

<?php get_header(); ?>

<section class="about-me-container">
    <div class="text_info_about_me" itemprop="description">
        <h2>
            <?= __hepl('Qui suis-je?') ?>
            </h2>
        <?= $description = get_field('description'); ?>
    </div>

    <div class="about_description_image">
        <?php
        $description_image = get_field('description_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($description_image) {
            echo wp_get_attachment_image($description_image, $size);
        }
        ?>
    </div>

</section>


<section class="career-container">
    <div class="text_info_about_life">
    <h2><?= __hepl('Mon parcours') ?></h2>

    <?= $life_path = get_field('life_path');?>
</div>

    <div class="about_life_path_image">
        <?php
        $life_path_image = get_field('life_path_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($life_path_image) {
            echo wp_get_attachment_image($life_path_image, $size);
        }
        ?>
    </div>
</section>


<section class="languages-container">
    <h2 class="languages-title">
        <?= __hepl('Mes langages') ?>
    </h2>
    <ul class="languages-list" itemscope itemtype="https://schema.org/Person">
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://html.spec.whatwg.org/multipage/"><img
                            src="/wp-content/themes/pf/resources/img/html.svg" alt="<?= __hepl('image du langage HTML') ?>" width="117"
                            height="117" class="languages-image"></a>
            </div>
            <p itemprop="skills" class="language_name">
              HTML
            </p>
        </li>
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://www.w3.org/TR/2001/WD-css3-roadmap-20010523/"><img
                            src="/wp-content/themes/pf/resources/img/css-3.svg" width="117" height="117"
                            alt="image du langage CSS " class="languages-image"></a>
            </div>
            <p itemprop="skills" class="language_name">
                CSS
            </p>
        </li>
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript"><img
                            src="/wp-content/themes/pf/resources/img/logo-javascript.svg"
                            alt="<?= __hepl('image du langage de programmation JavaScript') ?>" width="117" height="117"
                            class="languages-image"></a>
            </div>
            <p itemprop="skills" class="language_name">
              JavaScript
            </p>
        </li>
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://www.typescriptlang.org/docs/"><img
                            src="/wp-content/themes/pf/resources/img/typescript.svg"
                            alt="<?= __hepl('image du langage de programmation TypeScript') ?>" width="117" height="117"
                            class="languages-image"></a></div>
            <p itemprop="skills" class="language_name">
                TypeScript
            </p>
        </li>
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://www.php.net/"><img src="/wp-content/themes/pf/resources/img/OfficialPHPLogo.svg"
                                                      width="117" height="117"
                                                      alt="<?= __hepl('image du langage de programmation PHP') ?>"
                                                      class="languages-image"></a>
            </div>
            <p itemprop="skills" class="language_name">
               PHP
            </p>
        </li>
        <li class="languages-element">
            <div class="language_image_container">
                <a href="https://dev.mysql.com/doc/"><img src="/wp-content/themes/pf/resources/img/mysql.svg"
                                                            width="117" height="117"
                                                            alt="                <?= __hepl('image du langage de programmation MySQL') ?>"
                                                            class="languages-image"></a>
            </div>
            <p itemprop="skills" class="language_name">
             MySQL
            </p>
        </li>
    </ul>
</section>
<?php get_footer(); ?>

