<!--        A REVOIR FLECHE !!!             -->


<?php get_header(); ?>

    <h2 class="main_title">
        <?= get_field('main_title'); ?>
    </h2>
    <h3 class="main_subtitle" itemprop="jobTitle">
        <?= get_field('main_subtitle'); ?>
    </h3>

<div class="introduction_container">
    <section class="discover-me-container" itemprop="description">
        <h2>
            <?= get_field('article_title'); ?>
        </h2>
        <?= get_field('article_text'); ?>

        <a href="<?= get_field('change_page_link'); ?>" title="Aller vers la page 'A propos'" class="link_discover_me">Me
            découvrir
            <svg width="32" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 28"
                 class="arrow_discover">
                <path class="st0" d="M2.2,13.3h28M30.2,13.3L16.2,2.3M30.2,13.3l-14,11.1"/>
            </svg>
        </a>
    </section>


    <div class="discover_image">
        <?php
        $discover_image = get_field('decoration_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($discover_image) {
            echo wp_get_attachment_image($discover_image, $size);
        }
        ?></div>
</div>




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

            // On ajoute les projets sur la page
            // On ouvre "la boucle" (The Loop), la structure de contrôle
            // de contenu propre à Wordpress:


            if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                <article class="project">
                    <a href="<?= get_the_permalink(); ?>" class="project__link">
                        <span class="sro">Découvrir le projet <?= get_the_title(); ?></span>
                    </a>

                    <!--        A REVOIR STRUCTURE !!!             -->
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



            <!--        A REVOIR FLECHE !!!             -->
        </div>
        <div class="link_with_arrow more_projects">
            <a href="http://portfolio.test/projets/" class="more_projects_link" title="Aller vers la page 'Projets'" >Voir tous les projets
                <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow_projects">
                    <path d="M2 13.9993H30M30 13.9993L16 2.91602M30 13.9993L16 25.0827" stroke-width="4"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

    </section>
<?php get_footer(); ?>