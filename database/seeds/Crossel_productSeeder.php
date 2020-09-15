<?php

use Illuminate\Database\Seeder;

class Crossel_productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $places = [1, 2, 3, 4, 5];

    public function run()
    {
        foreach (self::$places as $place) {
            DB::table('crossel_products')->insert([
                'product_id' => $place,
                'crossel_id' => $place,
            ]);
        }

       /*  DB::table('crossel_products')->insert([
            'product_id' => '1',
            'crossel_id' => '1', 
        ]); */
       
    }
}
