<?php

namespace Database\Seeders;

use App\Models\Lightsaber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LightsaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $sabers = config('db.sabers');

        foreach ($sabers as $saber) {
            $newSaber = new Lightsaber();
            $newSaber->name = $saber['name'];
            $newSaber->image = $saber['image'];
            $newSaber->description = $saber['description'];
            $newSaber->price = $saber['price'];
            $newSaber->save();
        }
    }
}
