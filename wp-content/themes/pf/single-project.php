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
        .travel {
        }
        .travel__header {       /*damit man titel über Bild machen kann*/
            height: 400px;
            width: 100%;
            position: relative;
        }
        .travel__back,
        .travel__back:before,
        .travel__head {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }
        .travel__back {
            z-index: 0;     /* va s'afficher derrière */
            margin: 0;
            padding: 0;
        }
        .travel__back:before {          /* ombrage damit text noch visible der drüber kommt kann man auch mit gradient machen = komplizierter */
            content: '';
            display: block;
            background: rgb(100,20,40);
            opacity: 0.75;
        }
        .travel__cover {         /*toute la largeur*/
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .travel__head {     /* va s'afficher au dessus */
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .travel__container {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .travel__ingredients {
            width: 320px;
            padding: 20px;
            background: #f1f1f1;
            display: flex;
            flex-direction: column-reverse;
        }
        .travel__fig {
            display: block;
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 0;
        }
        .travel__img {
            display: block;
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .travel__rating {
            width: 150px;
            height: 30px;
            display: block;
            position: relative;
            background: url(/wp-content/themes/dw/resources/img/star_empty.svg);
            background-repeat: repeat-x;
            background-position: 0 0;
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

<?php
// On ouvre "la boucle" (The Loop), la structure de contrôle de contenu propre à Wordpress:
if(have_posts()): while(have_posts()): the_post(); ?>


    <div class="project__header">
        <h2 class="project__title">Le VM</h2>
        <h3 class="project__subline">projet client</h3>
    </div>
<div class="project__proporties">
    <div class="project__goal">
        <h4 class="project__proporties__title">
            Objectif du projet
        </h4>
        <p class="project__proporties__text">
            Text
        </p>
    </div>

    <div class="project__steps">
        <h4 class="project__proporties__title">
            Étapes
        </h4>
        <p class="project__proporties__text">
            Text
        </p>
    </div>

    <div class="project__problems">
        <h4 class="project__proporties__title">
            Les difficultés rencontrés
        </h4>
        <p class="project__proporties__text">
            Text
        </p>
    </div>
</div>

<!--    <div class="travel">
        <header class="travel__header">
            <div class="travel__head">
                <h2 class="travel__title"><?php /*= get_the_title(); */?></h2>
                <p class="travel__excerpt"><?php /*= get_the_excerpt(); */?></p>
                <div class="travel__rating" data-score="<?php /*= $rating = get_field('rating'); */?>">
                    <p class="sro">Ce voyage obtient l'appréciation de <?php /*= $rating; */?> étoiles sur 5</p>
                </div>

            </div>
        </header>

        <div class="travel__container">
            <aside class="travel__ingredients">
                <div>
                    <h3>Points-clés</h3>
                    <div class="wysiwyg">
                        <?php /*= get_field('keypoints'); */?>
                    </div>
                </div>
            </aside>

            <section class="travel__steps">
                <h3>Récit de voyage</h3>
                <div class="wysiwyg">
                    <?php /*= get_field('story'); */?>
                </div>
            </section>
        </div>
    </div>-->

<?php
    // On ferme "la boucle" (The Loop):
endwhile; else: ?>
    <p>Ce projet n'existe pas.</p>
<?php endif; ?>
<?php get_footer(); ?>