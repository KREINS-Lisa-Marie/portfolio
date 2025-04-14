<?php

add_action( 'acf/include_fields', function() {
  if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
  }

  acf_add_local_field_group( array(
    'key' => 'group_67d83a2df02c6',
    'title' => 'OPTION Site settings',
    'fields' => array(
      array(
        'key' => 'field_67e271bf69d76',
        'label' => 'Logo de l\'entreprise',
        'name' => 'options_company_logo',
        'aria-label' => '',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
        'preview_size' => 'medium',
      ),
      array(
        'key' => 'field_67d83a2eb0329',
        'label' => 'Nom de l\'entreprise',
        'name' => 'options_company_name',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_67d83a9e4f48c',
        'label' => 'Adresse mail',
        'name' => 'options_mail',
        'aria-label' => '',
        'type' => 'link',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
      ),
      array(
        'key' => 'field_67d83b074f48d',
        'label' => 'Numéro de téléphone',
        'name' => 'options_number_phone',
        'aria-label' => '',
        'type' => 'link',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'site-options-fr',
        ),
      ),
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'site-options-en',
        ),
      ),
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'site-options',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ) );

  acf_add_local_field_group( array(
    'key' => 'group_67d83253519ae',
    'title' => 'POST Recipes',
    'fields' => array(
      array(
        'key' => 'field_67d83253a5aad',
        'label' => 'Nom de la recette',
        'name' => 'recipe_name',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_67d83279a9296',
        'label' => 'Couleur de fond',
        'name' => 'background_color',
        'aria-label' => '',
        'type' => 'button_group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'red' => 'Rouge',
          'blue' => 'Bleu',
          'yellow' => 'Jaune',
        ),
        'default_value' => 'red',
        'return_format' => 'value',
        'allow_null' => 0,
        'layout' => 'horizontal',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'recipe',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ) );

  acf_add_local_field_group( array(
    'key' => 'group_67efc8476b578',
    'title' => 'TEMPLATE FLEXIBLE',
    'fields' => array(
      array(
        'key' => 'field_67efc847b6103',
        'label' => 'STAGE',
        'name' => '',
        'aria-label' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_67efc8b65c795',
        'label' => 'Stage',
        'name' => 'stage',
        'aria-label' => '',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_67efc8d25c796',
            'label' => 'Supline',
            'name' => 'supline',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '30',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
          ),
          array(
            'key' => 'field_67efc8e85c797',
            'label' => 'Headline',
            'name' => 'headline',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '40',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
          ),
          array(
            'key' => 'field_67efc8f05c798',
            'label' => 'Subline',
            'name' => 'subline',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '30',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
          ),
          array(
            'key' => 'field_67efc8f85c799',
            'label' => 'Text',
            'name' => 'text',
            'aria-label' => '',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 0,
          ),
          array(
            'key' => 'field_67efc9465c79b',
            'label' => 'Link',
            'name' => 'link',
            'aria-label' => '',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
          ),
          array(
            'key' => 'field_67efc92b5c79a',
            'label' => 'Image',
            'name' => 'image',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
          ),
        ),
      ),
      array(
        'key' => 'field_67efc8a05c794',
        'label' => 'CONTENT',
        'name' => '',
        'aria-label' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_67efc9b66559a',
        'label' => 'Content',
        'name' => 'content',
        'aria-label' => '',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array(
          'layout_67efc9c4a11a3' => array(
            'key' => 'layout_67efc9c4a11a3',
            'name' => 'text-media',
            'label' => 'Text media',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_67efca516559b',
                'label' => 'Supline',
                'name' => 'supline',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '30',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
              ),
              array(
                'key' => 'field_67efca5e6559c',
                'label' => 'Headline',
                'name' => 'headline',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '40',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
              ),
              array(
                'key' => 'field_67efca656559d',
                'label' => 'Subline',
                'name' => 'subline',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '30',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
              ),
              array(
                'key' => 'field_67efca6f6559e',
                'label' => 'Text',
                'name' => 'text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
                'delay' => 0,
              ),
              array(
                'key' => 'field_67efca836559f',
                'label' => 'Cta',
                'name' => 'cta',
                'aria-label' => '',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
              ),
              array(
                'key' => 'field_67efca94655a0',
                'label' => 'Image',
                'name' => 'image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
              ),
              array(
                'key' => 'field_67efcaf4655a1',
                'label' => 'Media position',
                'name' => 'media_position',
                'aria-label' => '',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => '',
                ),
                'choices' => array(
                  'left' => 'Gauche',
                  'center' => 'Centre',
                  'right' => 'Droite',
                ),
                'default_value' => '',
                'return_format' => 'value',
                'allow_null' => 0,
                'layout' => 'horizontal',
              ),
              array(
                'key' => 'field_67efcb18655a2',
                'label' => 'Media type',
                'name' => 'media_type',
                'aria-label' => '',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => '',
                ),
                'choices' => array(
                  'image' => 'Image',
                  'video' => 'Video',
                ),
                'default_value' => 'image',
                'return_format' => 'value',
                'allow_null' => 0,
                'layout' => 'horizontal',
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          'layout_67efcc81655a3' => array(
            'key' => 'layout_67efcc81655a3',
            'name' => 'gallery',
            'label' => 'Gallery',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_67efcca5655a6',
                'label' => 'Headline',
                'name' => 'headline',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
              ),
              array(
                'key' => 'field_67efcce9655a7',
                'label' => 'Text',
                'name' => 'text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
                'delay' => 0,
              ),
              array(
                'key' => 'field_67efcc86655a5',
                'label' => 'Gallery',
                'name' => 'gallery',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => 12,
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
              ),
            ),
            'min' => '',
            'max' => '',
          ),
        ),
        'min' => '',
        'max' => '',
        'button_label' => 'Ajouter un élément',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-flexible.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ) );

  acf_add_local_field_group( array(
    'key' => 'group_67c1776e73c20',
    'title' => 'Travel fields (main)',
    'fields' => array(
      array(
        'key' => 'field_67c1776e33a91',
        'label' => 'Appréciation',
        'name' => 'rating',
        'aria-label' => '',
        'type' => 'select',
        'instructions' => '',
        'required' => true,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          0 => '0 étoiles',
          1 => '1 étoile',
          2 => '2 étoiles',
          3 => '3 étoiles',
          4 => '4 étoiles',
          5 => '5 étoiles',
        ),
        'default_value' => false,
        'return_format' => 'value',
        'multiple' => 0,
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
        'placeholder' => '',
      ),
      array(
        'key' => 'field_67c1793f33a92',
        'label' => 'Date de départ',
        'name' => 'departure',
        'aria-label' => '',
        'type' => 'date_picker',
        'instructions' => '',
        'required' => true,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
        'display_format' => 'd/m/Y',
        'return_format' => 'U',
        'first_day' => 1,
      ),
      array(
        'key' => 'field_67c179d633a93',
        'label' => 'Date de retour',
        'name' => 'return',
        'aria-label' => '',
        'type' => 'date_picker',
        'instructions' => 'Laissez vide si vous n\'êtes pas encore revenu.',
        'required' => false,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
        'display_format' => 'd/m/Y',
        'return_format' => 'U',
        'first_day' => 1,
      ),
      array(
        'key' => 'field_67c18d9c24679',
        'label' => 'Récit de voyage',
        'name' => 'story',
        'aria-label' => '',
        'type' => 'wysiwyg',
        'instructions' => '',
        'required' => true,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'toolbar' => 'full',
        'media_upload' => true,
        'tabs' => 'all',
        'default_value' => '',
        'delay' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'travel',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'field',
    'hide_on_screen' => array(
      0 => 'the_content',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => false,
  ) );

  acf_add_local_field_group( array(
    'key' => 'group_67c1904255e73',
    'title' => 'Travel fields (side)',
    'fields' => array(
      array(
        'key' => 'field_67c1904262fc8',
        'label' => 'Image sur le côté',
        'name' => 'side_image',
        'aria-label' => '',
        'type' => 'image',
        'instructions' => 'Préférez une image carrée. Un recadrage automatique aura lieu.',
        'required' => true,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'id',
        'library' => 'all',
        'min_width' => 420,
        'min_height' => 420,
        'preview_size' => 'medium',
        'min_size' => 0,
        'max_width' => 0,
        'max_height' => 0,
        'max_size' => 0,
        'mime_types' => '',
      ),
      array(
        'key' => 'field_67c18d2924678',
        'label' => 'Points clés',
        'name' => 'keypoints',
        'aria-label' => '',
        'type' => 'wysiwyg',
        'instructions' => '',
        'required' => true,
        'conditional_logic' => false,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'tabs' => 'visual',
        'toolbar' => 'basic',
        'media_upload' => false,
        'default_value' => '',
        'delay' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'travel',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => false,
  ) );
} );



