<?php namespace Knine\ProductsModule\Product\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class ProductTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'name',
        ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.image.preview',
        'name',
        'brand',
        'category',
        'brand',
        'model',
        'sku',
        'entry.price.currency'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
      //  'view'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete', 
       // 'view'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
