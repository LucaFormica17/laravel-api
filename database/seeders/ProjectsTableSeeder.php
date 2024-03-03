<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $new_project = new Project();
            $new_project->title = $faker->word();
            $new_project->description = $faker->text('100');
            $new_project->end_date = $faker->date();
            $new_project->save();
        }        
    }
}
