<?php namespace Knine\ProductsModule\Model;

use Knine\ProductsModule\Model\Contract\ModelRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ModelRepository extends EntryRepository implements ModelRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ModelModel
     */
    protected $model;

    /**
     * Create a new ModelRepository instance.
     *
     * @param ModelModel $model
     */
    public function __construct(ModelModel $model)
    {
        $this->model = $model;
    }
}
