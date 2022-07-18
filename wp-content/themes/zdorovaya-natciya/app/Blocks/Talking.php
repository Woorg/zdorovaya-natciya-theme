<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Talking extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Мы знаем, что говорим', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'talking';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Talking block.', 'sage');

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
            'align' => false,
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
            'list' => $this->list(),
            'image' => $this->image(),
            'title' => $this->title(),
            'text' => $this->list(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $talking = new FieldsBuilder('talking');

        $talking
            ->addRepeater('list', [
                    'label' => 'Список',
                    'collapsed' => 'image',
                    'layout' => 'row',
                    'button_label' => '',
                    // 'sub_fields' => [],
                ])
                ->addTextarea('title', [
                    'label' => 'Заголовок',
                    'instructions' => '',
                    'required' => 0,
                    'rows' => '2',
                    'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
                ])
                ->addImage('image', [
                    'label' => 'Изображение',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                ])
                ->addWysiwyg('text', [
                    'label' => 'Текст',
                    'media_upload' => 0,
                    'delay' => 1,
                ])

            ->endRepeater();

        return $talking->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function list()
    {
        return get_field('list');
    }

    public function title()
    {
        return get_field('title');
    }

    public function image()
    {
        return get_field('image');
    }

    public function text()
    {
        return get_field('text');
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
