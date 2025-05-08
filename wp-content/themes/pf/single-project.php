<?php get_header(); ?>

<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle de contenu propre à Wordpress:
if (have_posts()): while (have_posts()): the_post(); ?>


    <div class="project__header">
        <h2 class="page__title"><?= get_the_title(); ?></h2>
        <!-- <?php /*if ($project_subline = get_field('project_subline'):*/ ?>
        <h3 class="project__subline"><?php /*= $project_subline; */ ?></h3>
    --><?php /*endif;*/ ?>
        <h3 class="project__subline"><?= $project_subline = get_field('project_subline'); ?></h3>
    </div>
    <div class="project__proporties">
        <h3 class="sro">Détails du projet</h3>
        <div class="project__goal">
            <h4 class="project__proporties__title">
                Objectif du projet
            </h4>
            <?= $goal = get_field('goal'); ?>
        </div>

        <div class="project__steps">
            <h4 class="project__proporties__title">
                Étapes
            </h4>
            <?= $steps = get_field('steps'); ?>
        </div>

        <div class="project__problems">
            <h4 class="project__proporties__title">
                Les difficultés rencontrés
            </h4>
            <?= $problems = get_field('problems'); ?>
        </div>
    </div>
    <div class="project-gallery">
        <h3 class="sro">Galerie du projet</h3>
        <div class="project_images_container">
            <?php $images = get_field('project_gallery'); ?>

            <?php if (!empty($images)): foreach ($images as $image): ?>
                <?= responsive_image($image, ['classes' => 'gallery__img']) ?>
            <?php endforeach; else: ?>
            <?php endif; ?>
        </div>
    </div>

    <!--    <div class="travel">
        <header class="travel__header">
            <div class="travel__head">
                <h2 class="travel__title"><?php /*= get_the_title(); */ ?></h2>
                <p class="travel__excerpt"><?php /*= get_the_excerpt(); */ ?></p>
                <div class="travel__rating" data-score="<?php /*= $rating = get_field('rating'); */ ?>">
                    <p class="sro">Ce voyage obtient l'appréciation de <?php /*= $rating; */ ?> étoiles sur 5</p>
                </div>

            </div>
        </header>

        <div class="travel__container">
            <aside class="travel__ingredients">
                <div>
                    <h3>Points-clés</h3>
                    <div class="wysiwyg">
                        <?php /*= get_field('keypoints'); */ ?>
                    </div>
                </div>
            </aside>

            <section class="travel__steps">
                <h3>Récit de voyage</h3>
                <div class="wysiwyg">
                    <?php /*= get_field('story'); */ ?>
                </div>
            </section>
        </div>
    </div>-->

<?php
    // On ferme "la boucle" (The Loop):
endwhile;
else: ?>
    <p>Ce projet n'existe pas.</p>
<?php endif; ?>
<?php get_footer(); ?>