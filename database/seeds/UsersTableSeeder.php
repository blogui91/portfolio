<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'casc.santana@gmail.com',
            'password' => bcrypt('santana21'),
            'name' => 'Cesar Santana',
            'dob' => '1991-01-24 00:00:00',
            'career' => 'Ingeniería en Tecnologías De la Información',
            'tagline' => 'Frontend Developer',
            'phone' => '3112601548',
            'description' => 'Desarrollador Frontend Vueliever, Me considero como una persona dedicada,
                             comprometida con mi trabajo y aprendiendo constantemente nuevas tecnologías,
                             tengo conocimientos de CSS3, HTML5, JS(ES6, TypeScript), a pesar de ser Vuelieber
                             he usado de manera básica React y Angular 2, conocimiento intermedio de AngularJS,
                             actualmente utilizando VueJS para desarrollar proyectos de manera profesional. 
                             \n\n No obstante, tambien hago Backend con el framework PHP Laravel, 
                             y otros frameworks de NodeJS como, Adonis, Express y Nuxt(Vue SSR)'
        ]);
    }
}
