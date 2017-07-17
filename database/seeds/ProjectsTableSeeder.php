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

        $projects = [
            [
                'name' => 'Binnacle',
                'activities' => 'Desarrollo de aplicacion web (SPA) y móvil(híbrida), para las plataformas de Android y iOS',
                'description' => 'Supervisión y control de procesos dentro de empresas, cuyo objectivo tiene generar soluciones oportunas a los problemas presentes en los procesos e inclusive prevenir toda clase de contigencias.',
                'logo' => 'images/projects/binnacle-logo.png',
                'image' => 'images/projects/bg-binnacle.jpg',
                'url' => 'https://app.binnacle.mx/'
            ],
            [
                'name' => 'Revolución Méxicana - Participa con tu diputado',
                'activities' => 'Desarrollo de aplicacion web, próximamente móvil para Android y iOS',
                'description' => 'Plataforma ciudadana para el monitoreo y evaluación de diputados locales del estado de Nuevo León, así como una herramienta para unificar la voluntad del electorado en los temas a votarse en el Congreso.',
                'logo' => 'images/projects/diputado-logo.png',
                'image' => 'images/projects/bg-diputados.jpg',
                'url' => 'https://participacontudiputado.com/'
            ],
            [
                'name' => 'Carzuz',
                'activities' => 'Desarrollo de aplicacion web, próximamente móvil para Android y iOS',
                'description' => 'Compra de Automóviles al mejor precio del mercado (Sólo para Estados Unidos).',
                'logo' => 'images/projects/carzuz-logo.svg',
                'image' => 'images/projects/bg-carzuz.jpg',
                'url' => 'https://beta.carzuz.com/'
            ],

            [
                'name' => 'Autotigre',
                'activities' => 'Desarrollo de página web, subida de videos, administrador de contenido',
                'description' => 'Pagina de los Tigres donde se lanzan retos semanales, donde el ganador se lleva de regalo un auto Spark.',
                'logo' => 'images/projects/tigres-logo.svg',
                'image' => 'images/projects/bg-tigres.jpg',
                'url' => 'http://www.tigres.com.mx/autotigre/'
            ],
            
            [
                'name' => 'Labbio Indu',
                'activities' => 'Desarrollo de Aplicación web SPA',
                'description' => 'Sistema de Ordenes y Facturas para el público en general.',
                'logo' => 'images/projects/labbioindu-logo.png',
                'image' => 'images/projects/bg-labbioindu.jpg',
                //'url' => 'https://beta.carzuz.com/'
            ],
            [
                'name' => 'Prentige Beta',
                'activities' => 'Desarrollo de aplicacion web SPA',
                'description' => 'Plataforma para buscar tutorías en línea con maestro especializados en la materia',
                'logo' => 'images/projects/prentige-white-logo.png',
                'image' => 'images/projects/bg-prentige.jpg',
                //'url' => 'https://beta.carzuz.com/'
            ],

        ];

        DB::table('projects')->truncate();

        foreach($projects as $project){
            DB::table('projects')->insert($project);
        }
    }
}
