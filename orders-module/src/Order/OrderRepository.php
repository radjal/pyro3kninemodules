<?php namespace Knine\OrdersModule\Order;

use Knine\OrdersModule\Order\Contract\OrderRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class OrderRepository extends EntryRepository implements OrderRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var OrderModel
     */
    protected $model;

    /**
     * Create a new OrderRepository instance.
     *
     * @param OrderModel $model
     */
    public function __construct(OrderModel $model)
    {
        $this->model = $model;
    }
}
