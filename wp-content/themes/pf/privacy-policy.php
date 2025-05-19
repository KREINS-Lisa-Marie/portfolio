<?php /* Template Name: Page "Privacy" */ ?>

<?php get_header(); ?>
<h2 class="privacy_title">
    <?= __hepl('Mentions légales') ?>
</h2>
<p class="update">
    <?= __hepl('Dernière mise à jour le ') ?>
    <?php
    // Date de la dernière mise à jour
    echo get_the_modified_date('d.m.Y');
    ?>

</p>

<div class="identity">
    <h3 class="identity__title">
        <?= __hepl('Informations générales') ?>
    </h3>
    <?= get_field('general_info');?>
</div>

<div class="hosting">
    <h3 class="hosting__title">
        <?= __hepl('Hosting') ?>
    </h3>
    <div class="hosting_text">
        <?= get_field('hosting');?><a href="https://www.infomaniak.com/" title="<?= __hepl('Aller voir la page d’Infomaniak') ?>">Infomaniak</a>
    </div>

</div>

<div class="intellectual_property">
    <h3 class="intellectual_property__title">
        <?= __hepl('Propriété intellectuelle') ?>
    </h3>
    <?= get_field('intellectual_property');?>
</div>

<div class="privacy_extern_links">
    <h3 class="privacy_extern_links__title">
        <?= __hepl('Liens externes') ?>
    </h3>
    <?= get_field('privacy_extern_links');?>
</div>

<div class="personal_data">
    <h3 class="personal_data__title">
        <?= __hepl('Données personnelles') ?>
    </h3>
    <?= get_field('personal_data');?>
</div>


<?php get_footer(); ?>
