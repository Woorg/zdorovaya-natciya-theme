<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class themeoptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Настройки темы';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Настройки темы | Theme Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeoptions = new FieldsBuilder('Настройки темы');

        $themeoptions
            ->addTab('general', [
                'label' => 'Общие',
            ])
            ->addImage('logo_image', [
                'label' => 'Логотип',
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addText('address', [
                'label' => 'Адрес',
            ])
            ->addText('phone', [
                'label' => 'Телефон',
            ])
            ->addText('lat', [
                'label' => 'Широта для карты',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addText('long', [
                'label' => 'Долгота для карты',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addText('copyright', [
                'label' => 'Копирайт',
            ])
            ->addTextarea('text', [
                'label' => 'Текст',
                'rows' => '2',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addText('text_2', [
                'label' => 'Текст',
            ])

            ->addTab('social', [
                'label' => 'Социальные сети',
            ])
            ->addText('vk_url', [
                'label' => 'Vk url',
            ])
            ->addText('telegram_url', [
                'label' => 'Telegram url',
            ])
            ->addText('whatsup_url', [
                'label' => "Whats'up url"
            ]);

        return $themeoptions->build();
    }
}
