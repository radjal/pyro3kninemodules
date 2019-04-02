<?php namespace Knine\NewslettersModule\Newsletter;

use Knine\NewslettersModule\Newsletter\Contract\NewsletterRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class NewsletterRepository extends EntryRepository implements NewsletterRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var NewsletterModel
     */
    protected $model;

    /**
     * Create a new NewsletterRepository instance.
     *
     * @param NewsletterModel $model
     */
    public function __construct(NewsletterModel $model)
    {
        $this->model = $model;
    }
}
