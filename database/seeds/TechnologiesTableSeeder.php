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
    //https://invatar0.appspot.com/svg/SPA.jpg?s=100&font_size=35&bg=red&color=white
        $technologies = [
            'angularjs'  => 'AngularJS',
            'sass'       => 'SASS',
            'vuejs'      => 'Vuejs',
            'expressjs'  => 'ExpressJS',
            'mongodb'    => 'MongoDB',
            'java'       => 'Java',
            'webpack'    => 'Webpack',
            'laravelmix' => 'Laravel mix',
            'cordova'    => 'Apache Cordova',
            'mysql'      => 'Mysql',
            'mongoose'   => 'Mongoose',
            'laravel'    => 'Laravel',
            'angular'    => 'Angular 4',
            'nuxtjs'     => 'NuxtJS',
            'react'      => 'ReactJS',
            'vanillajs' => 'Vanilla JS',
            'jquery' => 'jQuery',
            'vuex' => 'Vuex',
            'spa' => 'SPA',
            'materialize' => 'Materialize',
            'bootstrap' => 'Bootstrap',
            'angular-meteor' => 'Angular Meteor',
            'api' => 'Laravel API'
        ];

        DB::table('technologies')->truncate();

        foreach($technologies as $key => $technology){

            DB::table('technologies')->insert([
                'name' => $technology,
                'slug' => str_slug($key, '-')
            ]);

        }
    }
}
