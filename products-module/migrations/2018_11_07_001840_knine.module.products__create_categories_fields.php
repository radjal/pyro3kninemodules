<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KnineModuleProductsCreateCategoriesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => [
            'name' => 'Nom',
            'type' => 'anomaly.field_type.text',
        ],
        'slug' => [
            'name' => 'Slug',
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
                ]
        ],
    ];

}
