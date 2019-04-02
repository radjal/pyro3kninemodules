<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KnineModuleProductsCreateProductsFields extends Migration
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
//        'slug' => [
//            'name' => 'Slug',
//            'type' => 'anomaly.field_type.slug',
//            'config' => [
//                'slugify' => 'name',
//                'type' => '_'
//                ]
//        ],
        'testcat' => [
            'name' => 'TestCat',
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
               // 'mode'    => 'lookup',
               // 'mode'    => 'dropdown',
                'mode'    => 'search',
                'related' => 'Knine\ProductsModule\Category\CategoryModel',
            ],
        ], 
//        'sku' => [
//            'name' => 'SKU',
//            'type' => 'anomaly.field_type.slug',
//            'config' => [
//                'slugify' => 'name',
//                'type' => '_'
//                ]
//        ], 
        'price'  => [
            'name' => 'Prix de vente',
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "min"       => 0
            ]
        ],
        'price_buy'  => [
            'name' => 'Prix d\'achat',
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "min"       => 0
            ]
        ],
        'image' => [
            'name' => 'Image',
            'type' => 'anomaly.field_type.file',
        ],
        'tags'  => [
            'name' => 'Mots clés',
            'type'   => 'anomaly.field_type.tags',
            'config' => [
                'free_input'    => true
            ]
        ],
//        'category' => [
//            'name' => 'Catégorie',
//            'type' => 'anomaly.field_type.text',
//        ],
        'description' => [
            'name' => 'Descriptif',
            'type' => 'anomaly.field_type.textarea',
        ],
        'color' => [
            'name' => 'Couleur',
            'type' => 'anomaly.field_type.text',
        ],
        'weight' => [
            'name' => 'Poids',
            'type' => 'anomaly.field_type.text',
        ],
//        'brand' => [
//            'name' => 'Marque',
//            'type' => 'anomaly.field_type.text',
//        ],
        'model' => [
            'name' => 'Model',
            'type' => 'anomaly.field_type.text',
        ],
        'version' => [
            'name' => 'Version',
            'type' => 'anomaly.field_type.text',
        ], 
    ];

}
