<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Seeder;

class editoriales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorial = new Editorial();
        $editorial->nombre = "Bloomsbury" ;
        $editorial->nacionalidad = "Inglaterra" ;
        $editorial->save();

        $editorial2 = new Editorial();
        $editorial2->nombre = "Salamandra" ;
        $editorial2->nacionalidad = "España" ;
        $editorial2->save();

    }
}
