<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Первый блок', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'hero';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Hero block.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'common';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'editor-ul';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = [];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = [];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'auto';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
            'align' => true,
            'align_text' => false,
            'align_content' => false,
            'full_height' => false,
            'anchor' => false,
            'mode' => true,
            'multiple' => true,
            'jsx' => true,
        ];

        /**
         * The block styles.
         *
         * @var array
         */
        // $this->styles = [
        //     [
        //         'name' => 'light',
        //         'label' => 'Light',
        //         'isDefault' => true,
        //     ],
        //     [
        //         'name' => 'dark',
        //         'label' => 'Dark',
        //     ]
        // ];

        /**
         * The block preview example data.
         *
         * @var array
         */
        // $this->example = [
        //    'items' => [
        //        ['item' => 'Item one'],
        //        ['item' => 'Item two'],
        //        ['item' => 'Item three'],
        //    ],
        // ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'hero_title' => $this->hero_title(),
            'hero_image' => $this->hero_image(),
            'hero_text' => $this->hero_text(),
            'hero_url' => $this->hero_url(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addTextarea('hero_title', [
                'label' => 'Заголовок',
                'rows' => '2',
                'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addImage('hero_image', [
                'label' => 'Изображение',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ])
            ->addTextarea('hero_text', [
                'label' => 'Текст',
                'rows' => '2',
                'new_lines' => 'wpautop', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addPageLink('hero_url', [
                'label' => 'Ссылка на статью',
                'type' => 'page_link',
                'post_type' => ['page'],
            ]);


        return $hero->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function hero_title()
    {
        return get_field('hero_title');
    }

    public function hero_image()
    {
        return get_field('hero_image');
    }

    public function hero_text()
    {
        return get_field('hero_text');
    }

    public function hero_url()
    {
        return get_field('hero_url');
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
        wp_enqueue_style('main-dev', get_template_directory_uri() . '/front/dev/static/css/main.css', false, null);


    }
}
