<?php namespace Knine\OrdersModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class OrdersModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/orders/items'           => 'Knine\OrdersModule\Http\Controller\Admin\ItemsController@index',
        'admin/orders/items/create'    => 'Knine\OrdersModule\Http\Controller\Admin\ItemsController@create',
        'admin/orders/items/edit/{id}' => 'Knine\OrdersModule\Http\Controller\Admin\ItemsController@edit',
        'admin/orders/ratings'           => 'Knine\OrdersModule\Http\Controller\Admin\RatingsController@index',
        'admin/orders/ratings/create'    => 'Knine\OrdersModule\Http\Controller\Admin\RatingsController@create',
        'admin/orders/ratings/edit/{id}' => 'Knine\OrdersModule\Http\Controller\Admin\RatingsController@edit',
        'admin/orders'           => 'Knine\OrdersModule\Http\Controller\Admin\OrdersController@index',
        'admin/orders/create'    => 'Knine\OrdersModule\Http\Controller\Admin\OrdersController@create',
        'admin/orders/edit/{id}' => 'Knine\OrdersModule\Http\Controller\Admin\OrdersController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Knine\OrdersModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Knine\OrdersModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Knine\OrdersModule\Event\ExampleEvent::class => [
        //    Knine\OrdersModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Knine\OrdersModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        OrdersItemsEntryModel::class => ItemModel::class,
        OrdersRatingsEntryModel::class => RatingModel::class,
        OrdersOrdersEntryModel::class => OrderModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        ItemRepositoryInterface::class => ItemRepository::class,
        RatingRepositoryInterface::class => RatingRepository::class,
        OrderRepositoryInterface::class => OrderRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
