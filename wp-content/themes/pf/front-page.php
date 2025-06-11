<!--        A REVOIR FLECHE !!!             -->


<?php get_header(); ?>

    <h2 class="main_title" aria-level="2" role="heading">
        <?= get_field('main_title'); ?>
    </h2>
    <p class="main_subtitle" itemprop="jobTitle">
        <?= get_field('main_subtitle'); ?>
    </p>

<div class="introduction_container">
    <section class="discover-me-container" itemprop="description">
        <h3 aria-level="3" role="heading">
            <?= get_field('article_title'); ?>
        </h3>
        <?= get_field('article_text'); ?>

        <a href="<?= get_field('change_page_link'); ?>" title="<?= __hepl("Aller vers la page 'A propos'") ?>" class="link_discover_me"><?= __hepl("Me découvrir") ?>
            <svg width="32" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 28"
                 class="arrow_discover">
                <path class="st0" d="M2.2,13.3h28M30.2,13.3L16.2,2.3M30.2,13.3l-14,11.1"/>
            </svg>
        </a>
    </section>


    <div class="discover_image">
        <?php
        $discover_image = get_field('decoration_image');
        //$size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($discover_image) {
            /* echo wp_get_attachment_image($discover_image, $size);*/

            echo responsive_image($discover_image, ['classes' => 'decoration__image']) ;
            //responsive_image($discover_image, ['classes' => 'decoration__image']);


        }
        ?></div>
<!--
    <div class="discover_image">
        <?php
/*        $image = get_field('decoration_image');
        $size = 'section_image'; // (thumbnail, medium, large, full or custom size)
        if ($image):*/?>
            <figure>
                <?php /*= wp_get_attachment_image($image, $size);;*/?>
                <?php /*= responsive_image(get_field('decoration_image'), ['lazy' => 'lazy', 'classes' => 'stage__image']) */?>
            </figure>
        <?php /*endif;*/?>

-->
</div>




    <section class="project_section">
        <h3 aria-level="3" role="heading"><?= __hepl("Mes projets récents") ?></h3>
        <div class="projects">
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 3,
            ]);

            // On ajoute les projets sur la page
            // On ouvre "la boucle" (The Loop), la structure de contrôle
            // de contenu propre à Wordpress:


            if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                <article class="project">
                    <a href="<?= get_the_permalink(); ?>" class="project__link" title="<?= __hepl("Aller vers le projet") ?>">
                        <span class="sro"><?= __hepl("Découvrir le projet ") ?><?= get_the_title(); ?></span>
                    </a>

                    <!--        A REVOIR STRUCTURE !!!             -->
                    <div class="project__card">
                        <div class="project__head">
                            <h4 class="project__title" aria-level="4"><?= get_the_title(); ?></h4>
                        </div>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'project__img']); ?>
                        </figure>
                    </div>


                </article>
            <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p><?= __hepl("Je n'ai pas de projets récents à montrer pour le moment...") ?></p>
            <?php endif; ?>

        </div>
        <div class="link_with_arrow more_projects">
            <a href="<?= get_field('link_to_all_projects'); ?>" class="more_projects_link" title="<?= __hepl("Aller vers la page 'Projets'") ?>" ><?= __hepl("Voir tous les projets") ?> <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow_projects">
                    <path d="M2 13.9993H30M30 13.9993L16 2.91602M30 13.9993L16 25.0827" stroke-width="4"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

    </section>
<?php get_footer(); ?>