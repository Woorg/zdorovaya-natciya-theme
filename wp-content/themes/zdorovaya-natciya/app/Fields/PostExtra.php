<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PostExtra extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $postExtra = new FieldsBuilder('post_extra');

        $postExtra
            ->setLocation('post_type', '==', 'post');

        $postExtra
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $postExtra->build();
    }
}
