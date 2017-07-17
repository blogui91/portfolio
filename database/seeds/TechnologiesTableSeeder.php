<?php

use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $technologies = [
            'AngularJS',
            'SASS',
            'Vuejs',
            'expressJS',
            'MongoDB',
            'Java',
            'Webpack',
            'Laravel mix',
            'Apache Cordova',
            'Mysql',
            'Mongoose',
            'Laravel',
            'Angular 4'
        ];

        foreach($technologies as $technology){

            DB::table('technologies')->insert([
                'name' => $technology,
                'slug' => str_slug($technology, '-')
            ]);

        }
    }
}
