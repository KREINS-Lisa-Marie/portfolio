<?php /* Template Name: Page "Projets" */ ?>
<!--commentaire pour dire à WP que c'est un fichier template -->


<!--La classe "sro" est une classe pour "screenreader-only"-->

<?php get_header(); ?>

<h2 class="page__title"><?= get_the_title(); ?></h2>

<section class="my_projects">
    <h2 class="sro"><?= __hepl('Liste de mes projets:') ?></h2>

        <div class="projects all_project_list">


            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'project',
                'posts_per_page' => 8,
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
            ];

            $query = new WP_Query($args);


            // On ajoute les projets sur la page
            // On ouvre "la boucle" (The Loop), la structure de contrôle
            // de contenu propre à Wordpress:


            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();?>

                <article class="project">
                    <a href="<?= get_the_permalink(); ?>" class="project__link">
                        <span class="sro"><?= __hepl('Découvrir le projet') ?> <?= get_the_title(); ?></span>
                    </a>

                    <!--        A REVOIR STRUCTURE !!!             -->
                    <div class="project__card white_card">
                            <h3 class="project__title">
                                <?= get_the_title(); ?>
                            </h3>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); ?>
                        </figure>
                    </div>


                </article>
            <?php endwhile; else: ?>
                <p>
                    <?= __hepl('Je n’ai pas de projets récents à montrer pour le moment...') ?>
                </p>
            <?php endif; ?>
        </div>
</section>


<?php get_footer(); ?>































    <!--            <div class="project__card">
                <div class="project__head">
                    <h3 class="project__title"><?php /*= get_the_title() */?></h3>
                </div>
                <figure class="project__fig">
                    <?php /*= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); */?>
                </figure>
            </div>-->



    <!--     <?php
    /*            // On ferme "la boucle" (The Loop):
            endwhile; else: */?>
        <p>Je n'ai pas de projets récents à montrer pour le moment...</p>
    --><?php /*endif; */?>



    <!--    <?php
    /*    // On ouvre "la boucle" (The Loop), la structure de contrôle
        // de contenu propre à Wordpress:
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'project',
            'posts_per_page' => 6,
            'paged' => $paged,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); */?>


            <article class="project__card">
                    <h3 class="project__title"><?php /*= get_the_title() */?></h3>
                <figure class="project__fig">
                    <?php /*= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); */?>
                </figure>
            </article>
-->


