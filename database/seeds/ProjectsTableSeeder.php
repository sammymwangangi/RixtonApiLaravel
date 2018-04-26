<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Project::create([
            'name' => 'Bweza',
        ]);
        App\Project::create([
            'name' => 'Alana',
        ]);
        App\Project::create([
            'name' => 'Banco',
        ]);
        App\Project::create([
            'name' => 'Amandla',
        ]);
        App\Project::create([
            'name' => 'UltraCity',
        ]);
        App\Project::create([
            'name' => 'MtaaPay',
        ]);
    }
}
