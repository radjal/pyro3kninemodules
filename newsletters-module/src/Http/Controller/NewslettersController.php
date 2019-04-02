<?php namespace Knine\NewslettersModule\Http\Controller;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

use Knine\NewslettersModule\Newsletter\Form\NewsletterFormBuilder;
class NewslettersController extends PublicController
{ 
    public function index()
//    public function index(NewsletterFormBuilder $builder)
    {
        $this->breadcrumbs->add('Home', '/');
        $this->breadcrumbs->add('XXXXXXXX_____X', '/xxxxxx_________');
 
//        return $builder->render();    

        return $this->view->make('knine.module.newsletters::newsletters/index');
        
        return $table->render();
    }
    
    public function create(NewsletterFormBuilder $builder)
    {
        return $builder->render();    
    }
    
    public function subscribe(NewsletterFormBuilder $builder)
    {
        //return $this->view->make('knine.module.newsletters::newsletters/subscribe');
        
        //return $table->render();
        //dd($builder);
        
        $this->messages->success('module::message.success');
//        $this->messages->info('info');
//        $this->messages->error('error');
//        $this->messages->warning('warning');
        return $builder->render(); 
    }
     

 
}
