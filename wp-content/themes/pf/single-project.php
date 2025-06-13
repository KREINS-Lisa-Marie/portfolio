<?php get_header(); ?>

<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle de contenu propre à Wordpress:
if (have_posts()): while (have_posts()): the_post(); ?>


    <div class="project__header">
        <h2 class="page__title" aria-level="2" role="heading"><?= get_the_title(); ?></h2>
        <p class="project__subline" ><?= $project_subline = get_field('project_subline'); ?></p>
    </div>
    <div class="project__proporties">
        <h3 class="sro" aria-level="3"><?= __hepl('Détails du projet') ?></h3>
        <div class="project__goal">
            <h4 class="project__proporties__title" aria-level="4">
                <?= __hepl('Objectif du projet') ?>
            </h4>
            <?= $goal = get_field('goal'); ?>
        </div>

        <div class="project__steps">
            <h4 class="project__proporties__title" aria-level="4">
                <?= __hepl('Étapes') ?>
            </h4>
            <?= $steps = get_field('steps'); ?>
        </div>

        <div class="project__problems">
            <h4 class="project__proporties__title" aria-level="4">
                <?= __hepl('Les difficultés rencontrées') ?>
            </h4>
            <?= $problems = get_field('problems'); ?>
        </div>

        <div class="link__to__extern_project">

            <?php if (get_field('link_to_projectpage')):?>
                <a href="<?= get_field('link_to_projectpage'); ?>" title="<?= __hepl('Aller sur la page du projet') ?>" class="link__to__extern__project__site link_discover_me"><?= __hepl("Vers la page du projet") ?>
                    <svg width="32" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 28"
                         class="arrow_discover">
                        <path class="st0" d="M2.2,13.3h28M30.2,13.3L16.2,2.3M30.2,13.3l-14,11.1"/>
                    </svg>
                </a>
        <?php endif;?>

        </div>
    </div>
    <div class="project-gallery">
        <h3 class="sro" aria-level="3">
            <?= __hepl('Galerie du projet') ?>
        </h3>
        <div class="project_images_container">
            <?php $images = get_field('project_gallery'); ?>

            <?php if (!empty($images)): foreach ($images as $image): ?>
                <?= responsive_image($image, ['classes' => 'gallery__img']) ?>
            <?php endforeach; else: ?>
            <?php endif; ?>
        </div>
    </div>

<?php
    // On ferme "la boucle" (The Loop):
endwhile;
else: ?>
    <p><?= __hepl('Ce projet n’existe pas.') ?></p>
<?php endif; ?>
<?php get_footer(); ?>