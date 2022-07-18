<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Techniques extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Методики оздоровления', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'techniques';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Techniques block.', 'sage');

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
            'title' => $this->techniques_title(),
            'articles' => $this->techniques_articles(),

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $techniques = new FieldsBuilder('techniques');

        $techniques
            ->addTextarea('techniques_title', [
                'label' => 'Заголовок',
                'rows' => '2',
                'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addRelationship('techniques_articles', [
                'label' => 'Статьи',
                'post_type' => [
                    'page'
                ],
                'return_format' => 'object',
            ]);

        return $techniques->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function techniques_title()
    {
        return get_field('techniques_title');
    }

    public function techniques_articles()
    {
        return get_field('techniques_articles');
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
