<?php  include ('templates/content/stage/stage.php') ?>
<?php get_header(); ?>
<style type="text/css">
    .sro {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        height: 1px; width: 1px;
        margin: -1px;
        padding: 0;
        border: 0;
    }
    .trips {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        gap: 1em;
    }
    .project {
        position: relative;
        width: calc((100% - 3em)/4);
    }
    .project__link {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .project__link:hover + .trip__card,
    .project__link:focus + .trip__card {
        transform: translate3d(0, -4px, 0);
    }
    .project__card {
        position: relative;
        z-index: 0;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.2);
        display: flex;
        flex-direction: column-reverse;
        transition: transform 200ms ease-out;
    }
    .project__fig {
        display: block;
        position: relative;
        height: 0;
        padding: 60% 0 0 0;
        margin: 0;
    }
    .project__img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .project__head {
        padding: 1em;
    }



    body{
        margin: 0;
        /*background-color: #D6CBE3*/;
        font-family: "Gotham", sans-serif;
    }
    .header{
        background-color: #9F90B7;
    }
    header nav{
        display: flex;

    }
    a{
        text-decoration: none;
        color: black;
    }
    footer{
        background-color: #D6CBE3;
        font-family: "Gotham", sans-serif;
    }
    footer h2{
        font-weight: 500;
    }
    .projects{
        background-color: #503E65;
    }
    .project__card{
        background-color: #D6CBE3;
        justify-items: center;
    }
    footer ul{
        list-style-type: none;
    }
    .discover-me-container{
        background-color: #D6CBE3;
    }

</style>

<section class="discover-me-container">
    <h2>
        Fasciné par le web
    </h2>
    <p>
        Je suis Lisa-Marie Kreins et je suis étudiante en 2ème Web à la HEPL de Seraing. Je suis très ambitieuse et j’essaie de m’ améliorer tout le temps. Je peux me passionner pour beaucoup de choses et je suis toujours prêt à découvrir quelque chose de nouveau !
    </p>
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
<section class="projects">
    <h2>Mes projets récents</h2>
    <div class="trips">
        <?php
        $projects = new WP_Query([
            'post_type' => 'project',
            'order' => 'DESC',
            'orderby' => 'date',
            'posts_per_page' => 3,
        ]);

        if($projects->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
            <article class="project">
                <a href="<?= get_the_permalink(); ?>" class="project__link">
                    <span class="sro">Découvrir le projet <?= get_the_title(); ?></span>
                </a>
                <div class="project__card">
                    <header class="project__head">
                        <h3 class="project__title"><?= get_the_title(); ?></h3>
                    </header>
                    <figure class="project__fig">
                        <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); ?>
                    </figure>
                </div>
            </article>
        <?php endwhile; else: ?>
            <p>Je n'ai pas de projets récents à montrer pour le moment...</p>
        <?php endif; ?>
    </div>
    <a href="http://portfolio.test/projets/">Voir tous les projets</a>
</section>
<?php get_footer(); ?>








