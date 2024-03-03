<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =
            [
                'HTML',
                'CSS',
                'Javascript',
                'VueJs',
                'Vite',
                'PHP',
                'Laravel',
            ];

        foreach ($array as $item) {
            $technology = new Technology();

            $technology->name = $item;


            $technology->save();
        }
    }
}
