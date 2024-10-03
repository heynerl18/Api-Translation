<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Tests\Data\TestData;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();
        DB::table('projects')->insert([
            [
                'base_locale'     => 'en-us',
                'created_at'      => '2023-02-07 17:15:02',
                'deleted_at'      => null,
                'description'     => null,
                'id'              => 'ef3dbacb-0570-4042-9c99-8894c23bffc9',
                'title'           => 'Project ABC',
                'updated_at'      => '2023-02-07 17:43:49',
            ],
            [
                'base_locale'     => 'en-us',
                'created_at'      => '2023-07-28 16:18:45',
                'deleted_at'      => null,
                'description'     => null,
                'id'              => '6b418f1d-d690-44f7-b068-d5c1170c30fc',
                'title'           => 'Project 123',
                'updated_at'      => '2023-07-28 16:18:45',
            ],
            [
            'base_locale'     => 'en-us',
            'created_at'      => '2023-02-07 17:15:02',
            'deleted_at'      => null,
            'description'     => null,
            'id'              => '98d76b22-0056-4491-9d45-cb45191184e3',
            'title'           => 'Project for tests',
            'updated_at'      => '2023-02-07 17:43:49',
            ]
        ]);


        if (env('APP_ENV') !== 'production') {
            DB::table('projects')->insert(array(

                1 =>
                    array(
                        'base_locale'     => 'en-us',
                        'created_at'      => '2023-01-24 01:38:11',
                        'deleted_at'      => null,
                        'description'     => 'Translations for kangen websites',
                        'id'              => '7b929f08-9103-41b7-b3de-53a359814d29',
                        'title'           => 'Kangen',
                        'updated_at'      => '2023-01-24 01:38:11',
                    ),

            ));
            //DB::table('projects')->insert(TestData::PROJECTS);
        }
    }
}
