<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // richiamo il mio array di dati
        $db_fumetti = include('./database/seeds/db_fumetti/data.blade.php');

        foreach ($db_fumetti as $fumetto) {
            $newFumetto = new Product();
            $newFumetto->title = $fumetto['title'];
            $newFumetto->description = $fumetto['description'];
            $newFumetto->thumb = $fumetto['thumb'];
            $newFumetto->price = $fumetto['price'];
            $newFumetto->series = $fumetto['series'];
            $newFumetto->sale_date = $fumetto['sale_date'];
            $newFumetto->type = $fumetto['type'];
        
            $newFumetto->save();
        }

    }
}
