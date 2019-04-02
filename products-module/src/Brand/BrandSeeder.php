<?php namespace Knine\ProductsModule\Brand;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class BrandSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        //
        
        $this->brands
            ->truncate()
            ->create(
                [
                    'en'      => [
                        'name'        => 'Brandtestname',
                    ],
                    'slug'    => 'testnameslug',
                ]
            );
    } 
}
