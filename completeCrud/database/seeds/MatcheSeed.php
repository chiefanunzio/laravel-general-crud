<?php

use Illuminate\Database\Seeder;
use App\Matche;
class MatcheSeed extends Seeder
{
    /**
     * Run the database seeds.
     *   
     * @return void
     */
    public function run()
    {
        factory(Matche::class, 5) -> create();   
    }
}
      