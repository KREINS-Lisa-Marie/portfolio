<?php /* Template Name: Page "À propos" */ ?> <!--commentaire pour dire à WP que c'est un fichier template -->


<!--La classe "sro" est une classe pour "screenreader-only"-->



<?php get_header(); ?>
<section class="about-me-container">
    <h2>Qui suis-je?</h2>
    <?= $description = get_field('description');?>
<!--    <p>
      Je suis Lisa-Marie Kreins et je suis étudiante en 2ème Web à la <abbr title="Haute École de la Province de Liège">HEPL</abbr> de Seraing.
        Je suis très ambitieuse et j’essaie de m’ améliorer tout le temps.
        Je peux me passionner pour beaucoup de choses et je suis toujours prête à découvrir quelque chose de nouveau !
        Avant mes études de Web, j’ai travaillé comme asstistante pharmaceutico-technique.
        Je sais parler 5 langues dont l’allemand, le français, le néerlandais, l’anglais et le luxembourgeois
    </p>-->
    <?= $description_image = get_field('description_image');?>
</section>





<section class="career-container">
    <h2>Mon parcours</h2>
    <?= $life_path = get_field('life_path');?>
<!--<ul>
    <li>
        2017 CESS en langues et sciences
    </li>
    <li>
        2017-2019 CESS technique en tant qu’assistante pharmaceutico-technique
    </li>
    <li>
        2019-2021 Assistante pharmaceutico-technique en Belgique
    </li>
    <li>
        2021-2023 Assistante pharmaceutico-technique au Luxembourg
    </li>
    <li>
        2023-2026 Bachelier en Technique Infographie option Web
    </li>
</ul>-->
    <?= $life_path_image = get_field('life_path_image');?>
</section>

<section class="languages-container">
    <h2 class="languages-title">
        Mes langages
    </h2>
    <ul class="languages-list" itemscope itemtype="https://schema.org/Person">
        <li class="languages-element">
            <a href="https://html.spec.whatwg.org/multipage/"><img src="./resources/img/html.svg" alt="image du langage HTML" width="117" height="117" class="languages-image"></a>
            <h3 itemprop="skills">
                HTML
            </h3>
        </li>
        <li class="languages-element">
            <a href="https://www.w3.org/TR/2001/WD-css3-roadmap-20010523/"><img src="./resources/img/css-3.svg" width="117" height="117" alt="image du langage CSS " class="languages-image"></a>
            <h3 itemprop="skills">
                CSS
            </h3>
        </li>
        <li class="languages-element">
            <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript"><img src="./resources/img/logo-javascript.svg" alt="image du langage de programmation JavaScript" width="117" height="117" class="languages-image"></a>
            <h3 itemprop="skills">
                JavaScript
            </h3>
        </li>
        <li class="languages-element">
            <a href="https://www.typescriptlang.org/docs/"><img src="./resources/img/typescript.svg" alt="image du langage de programmation TypeScript" width="117" height="117" class="languages-image"></a>
            <h3 itemprop="skills">
                TypeScript
            </h3>
        </li>
        <li class="languages-element">
            <a href="https://www.php.net/"><img src="./resources/img/OfficialPHPLogo.svg" width="117" height="117" alt="image du langage de programmation PHP" class="languages-image"></a>
            <h3 itemprop="skills">
                PHP
            </h3>
        </li>
        <li class="languages-element">
            <a href="https://dev.mysql.com/doc/"><img src="./resources/img/mysql.svg" width="117" height="117" alt="image du langage de programmation MySQL" class="languages-image"></a>
            <h3 itemprop="skills">
                MySQL
            </h3>
        </li>
    </ul>
</section>
<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle
// de contenu propre à Wordpress:
if(have_posts()): while(have_posts()): the_post(); ?>

    <div>


        <?= get_the_content(); ?></div>

<?php
    // On ferme "la boucle" (The Loop):
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>
<?php get_footer(); ?>

