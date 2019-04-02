<?php namespace Knine\ProductsModule\Http\Controller;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

class ProductsController extends PublicController
{
    public function index()
    {
        $this->breadcrumbs->add('Home', '/');
        $this->breadcrumbs->add('Products', '/products');

        return $this->view->make('knine.module.products::products/index');
    }
}