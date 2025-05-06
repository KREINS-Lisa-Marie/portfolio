<?php get_header(); ?>

<h2 class="main_title">
    <?= get_field('main_title'); ?>
</h2>
<h3 class="main_subtitle">
    <?= get_field('main_subtitle');?>
</h3>

<section class="discover-me-container">
<h2>
    <?= get_field('article_title');?>
</h2>
    <?= get_field('article_text');?>
    <a href="http://portfolio.test/a-propros/ " title="Aller vers la page 'A propos'" class="link_discover_me">Me découvrir</a>
<!--    --><?php /*= get_field('change_page_link');*/?>


    <?= get_field('decoration_image');?>
</section>
<?php

// On ajoute les projets sur la page
// On ouvre "la boucle" (The Loop), la structure de contrôle
// de contenu propre à Wordpress:
if(have_posts()): while(have_posts()): the_post(); ?>

    <div><?= get_the_content(); ?></div>

<?php
    // On ferme "la boucle" (The Loop):
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>
<section class="project_section">
    <h2>Mes projets récents</h2>
    <div class="projects">
        <?php
        $projects = new WP_Query([
            'post_type' => 'project',
            'order' => 'ASC',
            'orderby' => 'date',
            'posts_per_page' => 3,
        ]);

        if($projects->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
            <article class="project">
                <a href="<?= get_the_permalink(); ?>" class="project__link">
                    <span class="sro">Découvrir le projet <?= get_the_title(); ?></span>
                </a>
               <!-- <div class="project__card">
                    <div class="project__head">
                        <h3 class="project__title"><?php /*= get_the_title(); */?></h3>
                    </div>
                    <figure class="project__fig">
                        <?php /*= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); */?>
                    </figure>
                </div>-->

                <div class="project__card">
                    <div class="project__head">
                        <h3 class="project__title"><?= get_the_title(); ?></h3>
                    </div>
                    <figure class="project__fig">
                        <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); ?>
                    </figure>
                </div>


            </article>
        <?php endwhile; else: ?>
            <p>Je n'ai pas de projets récents à montrer pour le moment...</p>
        <?php endif; ?>
    </div>
    <div class="link_with_arrow more_projects">
        <a href="http://portfolio.test/projets/" class="more_projects_link">Voir tous les projets </a>
        <a href="http://portfolio.test/projets/">
            <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 13.9993H30M30 13.9993L16 2.91602M30 13.9993L16 25.0827" stroke-width="4"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>

</section>
<?php get_footer(); ?>