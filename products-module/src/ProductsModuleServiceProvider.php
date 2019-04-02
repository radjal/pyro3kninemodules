<?php namespace Knine\ProductsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class ProductsModuleServiceProvider extends AddonServiceProvider
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
        // new route to display our products
        'products' => [
            'as' => 'knine.module.products::products.index',
            'uses' => 'Knine\ProductsModule\Http\Controller\ProductsController@index'
        ],
        // routes automatically generated for our admin
        'admin/products'           => 'Knine\ProductsModule\Http\Controller\Admin\ProductsController@index',
        'admin/products/create'    => 'Knine\ProductsModule\Http\Controller\Admin\ProductsController@create',
        'admin/products/edit/{id}' => 'Knine\ProductsModule\Http\Controller\Admin\ProductsController@edit',
        
        'admin/products/categories'           => 'Knine\ProductsModule\Http\Controller\Admin\CategoriesController@index',
        'admin/products/categories/create'    => 'Knine\ProductsModule\Http\Controller\Admin\CategoriesController@create',
        'admin/products/categories/edit/{id}' => 'Knine\ProductsModule\Http\Controller\Admin\CategoriesController@edit',
        
        'admin/products/brands'           => 'Knine\ProductsModule\Http\Controller\Admin\BrandsController@index',
        'admin/products/brands/create'    => 'Knine\ProductsModule\Http\Controller\Admin\BrandsController@create',
        'admin/products/brands/edit/{id}' => 'Knine\ProductsModule\Http\Controller\Admin\BrandsController@edit',
        
        'admin/products/models'           => 'Knine\ProductsModule\Http\Controller\Admin\ModelsController@index',
        'admin/products/models/create'    => 'Knine\ProductsModule\Http\Controller\Admin\ModelsController@create',
        'admin/products/models/edit/{id}' => 'Knine\ProductsModule\Http\Controller\Admin\ModelsController@edit',
        
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Knine\ProductsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Knine\ProductsModule\Http\Middleware\ExampleMiddleware::class,
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
        //Knine\ProductsModule\Event\ExampleEvent::class => [
        //    Knine\ProductsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Knine\ProductsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ProductsProductsEntryModel::class => ProductModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        ProductRepositoryInterface::class => ProductRepository::class,
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
