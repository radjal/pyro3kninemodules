<?php namespace Knine\NewslettersModule\Http\Controller\Admin;

use Knine\NewslettersModule\Newsletter\Form\NewsletterFormBuilder;
use Knine\NewslettersModule\Newsletter\Table\NewsletterTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class NewslettersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param NewsletterTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(NewsletterTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param NewsletterFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(NewsletterFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param NewsletterFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(NewsletterFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
