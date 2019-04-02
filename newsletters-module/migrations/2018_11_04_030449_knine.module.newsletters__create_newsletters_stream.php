<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KnineModuleNewslettersCreateNewslettersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'newsletters',
         'title_column' => 'name',
         'translatable' => false,
         'trashable' => false,
         'searchable' => false,
         'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            //'translatable' => false, 
            'required' => true,
        ],
        'email' => [
            'unique' => true,
            'required' => true,
        ],
    ];

}
