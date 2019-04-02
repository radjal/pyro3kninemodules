<?php namespace Knine\OrdersModule\Order;

use Knine\OrdersModule\Order\Contract\OrderInterface;
use Anomaly\Streams\Platform\Model\Orders\OrdersOrdersEntryModel;

class OrderModel extends OrdersOrdersEntryModel implements OrderInterface
{

}
