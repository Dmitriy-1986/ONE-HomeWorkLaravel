<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
       //  $this->call(CategorySeeder::class);
        factory(App\Category::class, 10) -> create();
        factory(App\Product::class, 10) -> create();

        //factory(App\Crossel_product::class) -> create();
        $this->call(Crossel_productSeeder::class);

        factory(App\Post::class, 50) -> create();
        factory(App\Review::class, 30) -> create();
        
    }
}
