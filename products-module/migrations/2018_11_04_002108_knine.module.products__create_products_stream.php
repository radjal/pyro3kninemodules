<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KnineModuleProductsCreateProductsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'products',
         'title_column' => 'name',
         'translatable' => true,
         'trashable' => false,
         'searchable' => true,
         'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'price' => [
            'required' => true
        ],
        'price_buy' => [
            'required' => true
        ],
        'testcat',
        'image',
        'tags',
        'category',
        'description',
        'color',
        'weight',
        'brand',
        'model' => [
            'unique' => true 
        ],
        'version',
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'sku' => [
            'unique' => true,
            'required' => true,
        ],
    ];

}
