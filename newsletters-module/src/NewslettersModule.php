<?php namespace Knine\NewslettersModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class NewslettersModule extends Module
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
    protected $icon = 'fa fa-send';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'newsletters' => [
            'buttons' => [
                'new_newsletter',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
                'assignments',
            ],
        ],
        'types'      => [
            'buttons' => [
                'new_type',
            ],
        ],
    ];

}
