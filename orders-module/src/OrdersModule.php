<?php namespace Knine\OrdersModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class OrdersModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'orders' => [
            'buttons' => [
                'new_order',
            ],
        ],
        'ratings' => [
            'buttons' => [
                'new_rating',
            ],
        ],
        'items' => [
            'buttons' => [
                'new_item',
            ],
        ],
    ];

}
