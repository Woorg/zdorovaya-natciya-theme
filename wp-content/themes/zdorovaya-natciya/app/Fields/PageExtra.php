<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageExtra extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pageExtra = new FieldsBuilder('page_extra');

        $pageExtra
            ->setLocation('post_type', '==', 'page');

        $pageExtra
            ->addText('page_short_title', [
                'label' => 'Короткое название страницы',
            ]);

        return $pageExtra->build();
    }
}
