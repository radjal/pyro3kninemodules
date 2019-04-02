<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KnineModuleNewslettersCreateNewslettersFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //'name' => 'anomaly.field_type.text',
        'name' => [
            'type' => 'anomaly.field_type.text',
            'name' => 'Name'
            
        ],
        'email' => [
            'type' => 'anomaly.field_type.email',
            'name' => 'Email'
            
        ],
    ];

}
