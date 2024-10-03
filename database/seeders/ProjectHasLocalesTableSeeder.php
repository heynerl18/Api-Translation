<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Tests\Data\TestData;

class ProjectHasLocalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_has_locales')->delete();

        DB::table('project_has_locales')->insert(array(
            0  =>
                array(
                    'language_base' => 0,
                    'locale_code'   => 'es-cr',
                    'project_id'    => '7b929f08-9103-41b7-b3de-53a359814d29',
                ),
            1  =>
                array(
                    'language_base' => 1,
                    'locale_code'   => 'fr-ca',
                    'project_id'    => '7b929f08-9103-41b7-b3de-53a359814d29',
                ),
            2  =>
                array(
                    'language_base' => 1,
                    'locale_code'   => 'es-es',
                    'project_id'    => '7b929f08-9103-41b7-b3de-53a359814d29',
                ),
            3  =>
                array(
                    'language_base' => 0,
                    'locale_code'   => 'es-ni',
                    'project_id'    => '7b929f08-9103-41b7-b3de-53a359814d29',
                ),
        ));
        //DB::table('project_has_locales')->insert(TestData::PROJECT_HAS_LOCALES);
    }
}
