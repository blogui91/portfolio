<?php

use Illuminate\Database\Seeder;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            "1" => [2,3,7,9,12,19,20,23],
            "2" => [1,12,2,20],
            "3" => [2,3,8,12,20,18],
            "4" => [12,17,21],
            "5" => [1,22,19,5,20],
            "6" => [2,19,20,12,23]
        ];

        foreach($projects as $project_id => $technologies){
            foreach($technologies as $technology){
                DB::table('project_technology')->insert([
                    'project_id' => $project_id ,
                    'technology_id' => $technology
                ]);
            }
        }
    }
}
