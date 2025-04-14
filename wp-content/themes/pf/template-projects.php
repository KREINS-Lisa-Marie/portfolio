<?php /* Template Name: Page "Projets" */ ?> <!--commentaire pour dire à WP que c'est un fichier template -->


<!--La classe "sro" est une classe pour "screenreader-only"-->



<?php get_header(); ?>
<section class="about-me-container">
    <h2>Qui suis-je?</h2>
    <p>
        Je suis Lisa-Marie Kreins et je suis étudiante en 2ème Web à la <abbr title="Haute École de la Province de Liège">HEPL</abbr> de Seraing.
        Je suis très ambitieuse et j’essaie de m’ améliorer tout le temps.
        Je peux me passionner pour beaucoup de choses et je suis toujours prête à découvrir quelque chose de nouveau !
        Avant mes études de Web, j’ai travaillé comme asstistante pharmaceutico-technique.
        Je sais parler 5 langues dont l’allemand, le français, le néerlandais, l’anglais et le luxembourgeois
    </p>
</section>
<section class="career-container">
    <h2>Mon parcours</h2>
    <ul>
        <li>
            - 2017 CESS en langues et sciences
        </li>
        <li>
            - 2017-2019 CESS technique en tant qu’assistante pharmaceutico-technique
        </li>
        <li>
            - 2019-2021 Assistante pharmaceutico-technique en Belgique
        </li>
        <li>
            - 2021-2023 Assistante pharmaceutico-technique au Luxembourg
        </li>
        <li>
            - 2023-2026 Bachelier en Technique Infographie option Web
        </li>
    </ul>
</section>

<section class="languages-container">
    <h2 class="sro">
        Mes langages
    </h2>
    <ul>
        <li>
            <img src="" alt="">
            <h3>
                HTML
            </h3>
        </li>
        <li>
            <img src="" alt="">
            <h3>
                CSS
            </h3>
        </li>
        <li>
            <img src="" alt="">
            <h3>
                JavaScript
            </h3>
        </li>
        <li>
            <img src="" alt="">
            <h3>
                TypeScript
            </h3>
        </li>
        <li>
            <img src="" alt="">
            <h3>
                PHP
            </h3>
        </li>
        <li>
            <img src="" alt="">
            <h3>
                MySQL
            </h3>
        </li>
    </ul>
</section>

<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle
// de contenu propre à Wordpress:
if(have_posts()): while(have_posts()): the_post(); ?>

    <div><?= get_the_content(); ?></div>

<?php
    // On ferme "la boucle" (The Loop):
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>
<?php get_footer(); ?>

