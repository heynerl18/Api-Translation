<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Tests\Data\TestData;

class TokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tokens')->delete();

        \DB::table('tokens')->insert(array(
            0   =>
                array(
                    'id'          => '000e8d78-ae41-4468-8e79-2c86526f6495',
                    'token'       => 'from people saying',
                    //'category'    => 'CAT_5',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:23:04',
                    'updated_at'  => '2023-01-24 19:23:04',
                    'deleted_at'  => null,
                ),
            1   =>
                array(
                    'id'          => '0062c6f8-43b7-4336-ae34-a6a71a0db869',
                    'token'       => 'change your life.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:23:04',
                    'updated_at'  => '2023-01-24 19:23:04',
                    'deleted_at'  => null,
                ),
            2   =>
                array(
                    'id'          => '006b3024-7b1e-4de8-89cc-84f841d54fb0',
                    'token'       => 'but once you get enough',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            3   =>
                array(
                    'id'          => '00783d57-9175-4f4b-9aec-8016ed2db039',
                    'token'       => 'State / Province',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            4   =>
                array(
                    'id'          => '007b8de0-3e89-46e8-813b-5eb4c23c8091',
                    'token'       => 'all the way up to 6A,',
                    //'category'    => 'CAT_6',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            5   =>
                array(
                    'id'          => '0169d061-49be-4fe4-abec-cb658fb0a845',
                    'token'       => 'Strong Kangen Water®',
                    //'category'    => 'CAT_5',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:25:17',
                    'updated_at'  => '2023-01-24 19:25:17',
                    'deleted_at'  => null,
                ),
            6   =>
                array(
                    'id'          => '0173388f-f1ea-4634-9dc8-1bb06d8d81b4',
                    'token'       => 'WQA Enagic Gold Seal',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            7   =>
                array(
                    'id'          => '01bdd025-a804-4a05-8600-381d1d2d2879',
                    'token'       => 'Product Order Form',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            8   =>
                array(
                    'id'          => '023f0471-2ca0-4895-812a-ac0f173c05ce',
                    'token'       => 'Dimensions WHD: (mm)',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            9   =>
                array(
                    'id'          => '02464dfb-4411-49ba-85fa-b5a72f57e3f0',
                    'token'       => 'to drink the water.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            10  =>
                array(
                    'id'          => '024cb1c1-d5f6-415e-abc5-f14633044d16',
                    'token'       => 'E8PA Announcement',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            11  =>
                array(
                    'id'          => '024d1220-a5c5-4598-8c32-ad25d1e6a7af',
                    'token'       => 'and how it works.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            12  =>
                array(
                    'id'          => '026409d8-eb37-495a-9a9f-161898c979ac',
                    'token'       => 'Making the Switch',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            13  =>
                array(
                    'id'          => '03082783-a517-4b90-a802-f967b4ea7105',
                    'token'       => 'Ceramic Cartridge',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            14  =>
                array(
                    'id'          => '05bc422f-b362-4936-a66d-f1d26a14dcb6',
                    'token'       => 'Distributor name',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            15  =>
                array(
                    'id'          => '0617c6c3-c7ca-4580-a797-4e6f7da0afb8',
                    'token'       => 'Document Download',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            16  =>
                array(
                    'id'          => '08c572cb-3722-47de-9337-9a034adaaad5',
                    'token'       => 'Enagic Certified',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            17  =>
                array(
                    'id'          => '09170408-056d-4018-aca8-d92b580852f3',
                    'token'       => 'Why Kangen Water®',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            18  =>
                array(
                    'id'          => '096db632-a439-404a-990d-97753a692663',
                    'token'       => 'No results found.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            19  =>
                array(
                    'id'          => '09e5cd3f-9b14-45fd-85e3-6915472dedab',
                    'token'       => 'Uses & Benefits »',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            20  =>
                array(
                    'id'          => '0b001a48-ff00-4e6c-815e-c0081ad07230',
                    'token'       => 'BACK TO HOMEPAGE',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            21  =>
                array(
                    'id'          => '0b714908-6529-4c72-a43c-5e6c186159f5',
                    'token'       => 'Monthly Incentive',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            22  =>
                array(
                    'id'          => '0c658c89-217b-4320-b9d1-a5a0cf35ec4d',
                    'token'       => 'Distributor Rank',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            23  =>
                array(
                    'id'          => '108fa0ba-c474-43b4-9f54-2cf2ba62cdc2',
                    'token'       => 'Supply Order Form',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            24  =>
                array(
                    'id'          => '11f7c313-74f7-4854-8858-799ce956dbfa',
                    'token'       => '3 tbsp oilive oil',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            25  =>
                array(
                    'id'          => '12598580-664d-4005-9584-9569bc2eaf69',
                    'token'       => '1 tbsp chia seeds',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            26  =>
                array(
                    'id'          => '145ca98a-9c1f-482e-a270-20ab9ae873a9',
                    'token'       => '-Yes, absolutely.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            27  =>
                array(
                    'id'          => '14729135-50b3-4b5a-9ac4-12c030ac6165',
                    'token'       => 'Very Easy to Use',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            28  =>
                array(
                    'id'          => '147e7fe5-3e2f-48c1-912c-a3ef6639ed63',
                    'token'       => 'Cleaning Veggies',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            29  =>
                array(
                    'id'          => '1569f216-b11c-4e16-924d-fcb6fd784ac6',
                    'token'       => 'registered nurse,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            30  =>
                array(
                    'id'          => '1627370a-6aca-4884-b302-0be55129836e',
                    'token'       => '1. Scrub the Tub',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            31  =>
                array(
                    'id'          => '18f7558e-0338-4735-b862-d0bcbb5fea77',
                    'token'       => '6A Step-up Award',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            32  =>
                array(
                    'id'          => '19efb336-172d-4649-89d8-dc8388f10cda',
                    'token'       => 'product thumbnail',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            33  =>
                array(
                    'id'          => '1a724788-c685-42e9-aa23-65717724cce9',
                    'token'       => '1 protein powder',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            34  =>
                array(
                    'id'          => '1b4ac2e4-1ed1-4c6c-86ca-d16d9bffa406',
                    'token'       => 'Missing full name',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            35  =>
                array(
                    'id'          => '1b5b09d5-cd32-4c0d-8207-15e5fb8a9a8d',
                    'token'       => 'Customer Support',
                    //'category'    => 'CAT_4',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            36  =>
                array(
                    'id'          => '1bbf22b5-8e2f-4bd8-a5d1-2f01e37df4a4',
                    'token'       => 'Cynthia Briganti',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            37  =>
                array(
                    'id'          => '1bf46bf3-331d-4299-8860-4fa11eadeb3a',
                    'token'       => 'Does the Kangen 8',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            38  =>
                array(
                    'id'          => '1d0a1ac1-bb24-416d-a8c6-994decc478dd',
                    'token'       => 'NON EU Agreement',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            39  =>
                array(
                    'id'          => '1e24dd8f-ef4b-4c1c-b9e1-5e9e3fbd99ac',
                    'token'       => 'Related Products',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            40  =>
                array(
                    'id'          => '1ed96899-2501-447a-8101-88795e54ed44',
                    'token'       => 'product-super501',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            41  =>
                array(
                    'id'          => '1eff6e01-3de0-42a4-9729-53911bf6ebe5',
                    'token'       => 'yoga practitioner,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            42  =>
                array(
                    'id'          => '1fb0923f-cbcb-4620-9f94-0a34b2574366',
                    'token'       => 'Forms for Germany',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            43  =>
                array(
                    'id'          => '1fdb5c46-afe7-4ba5-b52f-6009360b927c',
                    'token'       => 'Machine Operation',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            44  =>
                array(
                    'id'          => '2029a03d-6a13-4495-a21c-3c110a972477',
                    'token'       => 'Enagic Gives Back',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            45  =>
                array(
                    'id'          => '208eceb9-d51c-4110-bd0e-4bc9f20fa4d6',
                    'token'       => 'Your Full Name *',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            46  =>
                array(
                    'id'          => '21fe27e8-ba58-4f8a-b7fd-c01c8608463c',
                    'token'       => 'Enagic Efriends Es',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            47  =>
                array(
                    'id'          => '2247e0a4-e9f8-47d9-98c8-9045dcecbfc5',
                    'token'       => 'Shipping Address',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            48  =>
                array(
                    'id'          => '22993ea7-d55e-4f28-8df1-6746a5af7dc2',
                    'token'       => 'Forms for France',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            49  =>
                array(
                    'id'          => '22ef169d-1313-4c81-8b77-078774072113',
                    'token'       => 'Technical Support',
                    //'category'    => 'CAT_3',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            50  =>
                array(
                    'id'          => '25544897-5108-49c0-823f-39ac49ac7b68',
                    'token'       => 'Shop: Leveluk K8',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            51  =>
                array(
                    'id'          => '257b44ed-015d-475b-b83a-61c3468efc9a',
                    'token'       => 'Bank Information',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            52  =>
                array(
                    'id'          => '25a80805-610a-446d-94d9-3e0d645195a9',
                    'token'       => 'VII. Registration',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            53  =>
                array(
                    'id'          => '26ea468f-a4c3-4b70-b265-6cfa91718e8f',
                    'token'       => 'product-certified',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            54  =>
                array(
                    'id'          => '26eda5b9-6257-423c-96e0-da4ddf0dbcac',
                    'token'       => 'Neodymium magnet',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            55  =>
                array(
                    'id'          => '27d4ec6c-8aa4-4efb-99d1-d5e4fda0cacc',
                    'token'       => 'Distributors E8pa',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            56  =>
                array(
                    'id'          => '292b3325-6b7d-4c34-b6e2-30b4c5589026',
                    'token'       => 'Antioxidant-Rich',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            57  =>
                array(
                    'id'          => '2acfc89d-a6b9-4f92-96d5-f14f6faade84',
                    'token'       => 'Invalid. Refunded.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            58  =>
                array(
                    'id'          => '2b2be7c2-5605-4c97-9681-7437e07fb76d',
                    'token'       => '1/3 cup glycerine',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            59  =>
                array(
                    'id'          => '2d414b41-d222-4b9c-8493-91e06c560944',
                    'token'       => 'Thelma Lao-Rivera',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            60  =>
                array(
                    'id'          => '2d701aac-6059-4b41-8689-631831a478ba',
                    'token'       => 'Payeur Alternatif',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            61  =>
                array(
                    'id'          => '2d9c45ff-d6a1-4a42-886e-c546a85f84cb',
                    'token'       => 'with Kangen Water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            62  =>
                array(
                    'id'          => '2e9c4f2c-f28f-441e-8de5-07b3cdb0bf62',
                    'token'       => 'Total water flow:',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            63  =>
                array(
                    'id'          => '2ee7fa59-c6a3-46dd-981d-aa2653849a21',
                    'token'       => 'image-description',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            64  =>
                array(
                    'id'          => '31954461-0885-4e28-a419-8fd173286f4a',
                    'token'       => 'C. Administration',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            65  =>
                array(
                    'id'          => '31fbbb73-ea58-41df-ba76-5323ed1a1b0e',
                    'token'       => '5 tbsp olive oil',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            66  =>
                array(
                    'id'          => '34f97f3d-7893-4b33-9a36-d09466933b34',
                    'token'       => 'You can join me.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            67  =>
                array(
                    'id'          => '3539b01d-ff8c-4b10-a654-3b4cc5b5afb3',
                    'token'       => 'One in a Million',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            68  =>
                array(
                    'id'          => '35791b2d-93c9-4441-b56f-99929eb6f3b3',
                    'token'       => 'Enhancer salt 1kg',
                    //'category'    => 'CAT_2',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            69  =>
                array(
                    'id'          => '3604b4a5-9145-47ef-a8ae-9b22319caf51',
                    'token'       => 'products-levelukr',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            70  =>
                array(
                    'id'          => '3689f63d-1af8-4eed-a6d7-3c736a48a8b8',
                    'token'       => 'Same as tap water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            71  =>
                array(
                    'id'          => '368c6752-f199-4932-bb96-a6132331005c',
                    'token'       => 'bottled water...',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            72  =>
                array(
                    'id'          => '37a64c8d-e744-4179-b0bc-d517d0d64513',
                    'token'       => '. What are they?',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            73  =>
                array(
                    'id'          => '3b19545f-1973-4305-a419-81d56ad1ecaa',
                    'token'       => 'THE-COUNTER MODEL',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            74  =>
                array(
                    'id'          => '3c58e418-768c-4986-aea1-ff094a69c403',
                    'token'       => 'Distributor Login',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            75  =>
                array(
                    'id'          => '3e252bcd-d387-4056-9e9e-69e21ee7467e',
                    'token'       => 'Forms for Slovakia',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            76  =>
                array(
                    'id'          => '3f498d03-f91d-4368-9749-55a76d80095f',
                    'token'       => 'Beauty Water Soap',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            77  =>
                array(
                    'id'          => '41863c26-141f-4dab-bbba-713afebb4192',
                    'token'       => 'Kangen Water® is',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            78  =>
                array(
                    'id'          => '41d8a3ce-1b8c-4dee-9458-adeed9074163',
                    'token'       => 'C.	Administration',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            79  =>
                array(
                    'id'          => '42fe8ec1-f527-4a7b-bbd4-164eddcb097f',
                    'token'       => 'built a business,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            80  =>
                array(
                    'id'          => '430332c7-3f6f-48fb-8290-7b60c7adcfde',
                    'token'       => 'to real success.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            81  =>
                array(
                    'id'          => '441cc7c9-500d-46a0-b4ef-bf5f0f3a56b4',
                    'token'       => 'Power Consumption',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            82  =>
                array(
                    'id'          => '449cdd8a-c610-4b08-82d0-27c6ede42738',
                    'token'       => 'Promotional Items',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            83  =>
                array(
                    'id'          => '46a0a97e-4bd6-4a64-9a32-c89773ea9bbf',
                    'token'       => 'Enagic Web System',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            84  =>
                array(
                    'id'          => '486634c8-b243-4b88-919e-b97811cb20c1',
                    'token'       => 'Supplement Facts',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            85  =>
                array(
                    'id'          => '49e98d70-c9ce-4801-9611-54d52ffd75f0',
                    'token'       => 'The Starter Model',
                    //'category'    => 'CAT_3',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            86  =>
                array(
                    'id'          => '4a063983-6d94-4420-b16c-73374afc983f',
                    'token'       => '2 3/4 cups water',
                    //'category'    => 'CAT_2',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            87  =>
                array(
                    'id'          => '4b132237-0455-444a-a4b5-1f2eb6476fac',
                    'token'       => 'shop-product-jr4',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            88  =>
                array(
                    'id'          => '4d347451-f17f-4b8e-9ead-2d6a719369e3',
                    'token'       => 'Revitalized Cells',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            89  =>
                array(
                    'id'          => '4df8010f-86de-415e-8c7d-1d6047cdf047',
                    'token'       => 'WQA Certification',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            90  =>
                array(
                    'id'          => '4e002632-52c4-42d6-acdc-f67d82391331',
                    'token'       => '2 medium bananas',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            91  =>
                array(
                    'id'          => '53644c57-0992-4258-adc2-4e79696c1f1a',
                    'token'       => 'Horst S. Filtzer',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            92  =>
                array(
                    'id'          => '551e8fba-1dea-4af5-b873-1a6374de202c',
                    'token'       => 'drink kangen water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            93  =>
                array(
                    'id'          => '5605eb9d-6f30-4151-8933-32e465bce810',
                    'token'       => 'products-super501',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            94  =>
                array(
                    'id'          => '569bee85-1fa2-4952-9756-d57e4dc91c52',
                    'token'       => 'Social Campaigns',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            95  =>
                array(
                    'id'          => '572a0388-2513-489c-9398-6df1cff48a1e',
                    'token'       => 'Prospecting Tools',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            96  =>
                array(
                    'id'          => '58347333-fad1-4ae5-9933-e8af6c64b0a9',
                    'token'       => 'Clean water (pH 8)',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            97  =>
                array(
                    'id'          => '58d6724c-ac95-4d47-b659-fcc4d972c06e',
                    'token'       => 'Domanda Di Nomina',
                   // 'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            98  =>
                array(
                    'id'          => '5954fb87-69ac-43ca-bcd1-800e93f79ee4',
                    'token'       => 'COMPARE MACHINES',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            99  =>
                array(
                    'id'          => '59643103-7231-40bc-8631-2d202eb5e9af',
                    'token'       => 'Greener Food page',
                    //'category'    => 'CAT_9',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            100 =>
                array(
                    'id'          => '5a0c96f4-f9b0-47da-9b94-b65ca208e15c',
                    'token'       => 'Distributor Info',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            101 =>
                array(
                    'id'          => '5a6980b4-ef17-479c-9f0d-d1f52d257ebe',
                    'token'       => 'Enagic Newsletter',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            102 =>
                array(
                    'id'          => '5c163f8e-7d35-4b41-bcf2-530d72247c41',
                    'token'       => 'Country Mismatch',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            103 =>
                array(
                    'id'          => '5c690fa5-82cf-4c77-89bc-80b5a2ba8ca0',
                    'token'       => 'Immermannstr. 33',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            104 =>
                array(
                    'id'          => '5c9ba050-85a8-4af9-bcb9-c4eb5c469a2c',
                    'token'       => 'Electrode Plates:',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            105 =>
                array(
                    'id'          => '5e394383-de53-4960-9b78-4e7b175bfee4',
                    'token'       => '100% plant-based',
                    //'category'    => 'CAT_6',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            106 =>
                array(
                    'id'          => '5e83d532-7aa1-42ef-9acb-f23515f53da1',
                    'token'       => 'The Energy Saver',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            107 =>
                array(
                    'id'          => '5f6775d7-7c16-4436-a9c2-03a33ea4c22a',
                    'token'       => 'Beauty Care Water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            108 =>
                array(
                    'id'          => '604720a5-4153-44f1-8859-9dd18de3cdad',
                    'token'       => 'A Global Business',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            109 =>
                array(
                    'id'          => '61778b09-3021-4e80-98b4-68d963196caf',
                    'token'       => 'info@enagiceu.com',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            110 =>
                array(
                    'id'          => '61d19987-ba22-4de5-b94c-88fca036b612',
                    'token'       => 'Compensation Plan',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            111 =>
                array(
                    'id'          => '62527b05-3422-4956-b31a-2838cfcad9cc',
                    'token'       => 'contain brownish',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            112 =>
                array(
                    'id'          => '62de1278-5aa5-4d15-bb7e-e3445a2f2f3a',
                    'token'       => 'No annual renewal',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            113 =>
                array(
                    'id'          => '634547c6-79c4-420e-9f4c-a13af7d155e0',
                    'token'       => 'I. Privacy Policy',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            114 =>
                array(
                    'id'          => '6495069d-24e1-4de5-a293-050aa04dbd14',
                    'token'       => 'Business Related',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            115 =>
                array(
                    'id'          => '649cbce0-968d-49cd-a0b7-c26ab73ac071',
                    'token'       => 'Refusal to Comply',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            116 =>
                array(
                    'id'          => '68f71e5a-8494-41c1-9058-a227ba8ccd42',
                    'token'       => 'Hironari Ohshiro',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            117 =>
                array(
                    'id'          => '6a693afc-5363-4fe7-8ff2-a263d7a901a9',
                    'token'       => 'Unscrew the top.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            118 =>
                array(
                    'id'          => '6aed4906-556e-4717-b7bb-494d080cbd9a',
                    'token'       => 'Customer Service',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            119 =>
                array(
                    'id'          => '6d85c871-274c-404b-9e52-2f4cfbf2d6a2',
                    'token'       => 'Postal / Zip Code',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            120 =>
                array(
                    'id'          => '6eb85ab6-f084-4526-9e5b-a3c9e0cd85df',
                    'token'       => 'Customer Requests',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            121 =>
                array(
                    'id'          => '705325f0-f2a4-49bc-a121-c9b613863422',
                    'token'       => '3 tbsp olive oil',
                    //'category'    => 'CAT_4',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            122 =>
                array(
                    'id'          => '721fa9b3-1d39-4ee3-a7bd-f76426d7b763',
                    'token'       => 'and earned $680.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            123 =>
                array(
                    'id'          => '7460599c-07dc-491e-8b74-2a852721d384',
                    'token'       => 'image decription',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            124 =>
                array(
                    'id'          => '77cf576d-e5ae-4292-815d-7e82c2703360',
                    'token'       => '(1) Shopping Cart',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            125 =>
                array(
                    'id'          => '77f83cee-8a44-4629-9f10-3c992dfdde25',
                    'token'       => 'Warranty: (years)',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            126 =>
                array(
                    'id'          => '784fb76d-3759-450f-aed4-5ad911fce251',
                    'token'       => 'Distributor Email',
                    //'category'    => 'CAT_9',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            127 =>
                array(
                    'id'          => '7a35e4ac-8948-4369-8f19-dc9217a722d4',
                    'token'       => 'News and Support',
                    //'category'    => 'CAT_3',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            128 =>
                array(
                    'id'          => '7a9ee8d4-1688-4ccc-a3fc-8308193d2f07',
                    'token'       => 'Shop Product List',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            129 =>
                array(
                    'id'          => '7ad60953-0867-4a6e-b890-3c594de56740',
                    'token'       => 'Sayra’s Cornbread',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            130 =>
                array(
                    'id'          => '7bf0ebd1-f828-4779-bf24-96c4874c7757',
                    'token'       => 'distributors-e8pa',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            131 =>
                array(
                    'id'          => '7c6f8d09-151c-4274-999b-348e478ed41a',
                    'token'       => 'Food preparation',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            132 =>
                array(
                    'id'          => '7c87dbb9-29b5-44ac-925e-a41a38beb4c0',
                    'token'       => 'Forms for Romania',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            133 =>
                array(
                    'id'          => '7d690dcc-5582-424d-a485-1d0dc7e1e5ca',
                    'token'       => '4 Titanium Plates',
                    //'category'    => 'CAT_1',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            134 =>
                array(
                    'id'          => '7eedadc1-fddc-4298-8a1e-af0ff6b40623',
                    'token'       => 'Inventory Loading',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            135 =>
                array(
                    'id'          => '81301823-555d-4d4e-b8ae-42b158c57eee',
                    'token'       => 'product-levelukr',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            136 =>
                array(
                    'id'          => '8141f278-04d1-4a8b-bc06-f2716d68affa',
                    'token'       => 'Marilyn Caporini',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            137 =>
                array(
                    'id'          => '837634a1-b01a-4bb3-ac88-293c88df6175',
                    'token'       => 'Ukon was patented.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            138 =>
                array(
                    'id'          => '850c99ff-878a-4757-bf58-7c9d913fda1c',
                    'token'       => '3. Terms of Sale',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            139 =>
                array(
                    'id'          => '86cae9c5-1b93-4a90-a27a-4b32704c8099',
                    'token'       => 'Plate size: (mm)',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            140 =>
                array(
                    'id'          => '8905e063-b890-4c9a-9284-762b25c1b614',
                    'token'       => 'enagic-news-post',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            141 =>
                array(
                    'id'          => '893ead12-0660-4d24-bbf8-0c6b86e98553',
                    'token'       => 'El Desistimiento',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            142 =>
                array(
                    'id'          => '89635af3-6b04-4a86-81b4-9fadda218b9a',
                    'token'       => 'Join a Community.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            143 =>
                array(
                    'id'          => '89a67b1f-058f-4b87-971b-3abb4a51ab14',
                    'token'       => 'I absolutely did,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            144 =>
                array(
                    'id'          => '89e8dd38-b3b0-4226-8aab-0481ab327367',
                    'token'       => 'product-ukon.dev',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            145 =>
                array(
                    'id'          => '8a77245a-9c23-4932-a8d5-43f21d73bec6',
                    'token'       => 'The Junior Model',
                    //'category'    => 'CAT_1',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            146 =>
                array(
                    'id'          => '8af225b1-7b8a-4e3b-9b23-903a36cf3131',
                    'token'       => 'Designing Spaces',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            147 =>
                array(
                    'id'          => '8bb6a1ee-6270-471b-85c1-5c878ccb4e5d',
                    'token'       => 'online-inquiries',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            148 =>
                array(
                    'id'          => '8c2405cc-b0a1-4255-ae3f-2d078d171935',
                    'token'       => 'Read on for more!',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            149 =>
                array(
                    'id'          => '8fa91e7f-98cb-45bf-b76e-18485999b110',
                    'token'       => '1 tbsp lemon peel',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            150 =>
                array(
                    'id'          => '9360718b-802d-4c0c-a010-fd110ae2cb20',
                    'token'       => 'visit enagic.com.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            151 =>
                array(
                    'id'          => '93db72e7-f11f-48da-b59f-aea66d1f269b',
                    'token'       => '40210 Düsseldorf',
                    //'category'    => 'CAT_4',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            152 =>
                array(
                    'id'          => '94a300ef-e7aa-4e9d-867c-ac498546c41f',
                    'token'       => 'Valid IBAN number',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            153 =>
                array(
                    'id'          => '959af287-9c9f-430d-90cf-ed007fe8b9fe',
                    'token'       => 'shop-product-ukon',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            154 =>
                array(
                    'id'          => '97062761-6fc6-4896-86e3-a7dec62812a9',
                    'token'       => 'First- And Surname',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            155 =>
                array(
                    'id'          => '97aa8d2c-0265-4338-9a64-28c050761445',
                    'token'       => 'register it here',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            156 =>
                array(
                    'id'          => '980a339b-e017-402c-936b-33d3cf387f19',
                    'token'       => 'kangen-water-uses',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            157 =>
                array(
                    'id'          => '985a0b5f-1868-4740-acde-e8f8af286e20',
                    'token'       => 'Distributor Phone',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            158 =>
                array(
                    'id'          => '992320fa-ef63-4b9c-8f35-f3a8caa517b0',
                    'token'       => 'is a way of life.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            159 =>
                array(
                    'id'          => '9e8e5090-d01c-4a90-90d6-c1173d83769c',
                    'token'       => 'Alternative Payer',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            160 =>
                array(
                    'id'          => '9f9d6453-830b-4d4b-87fc-a6ef4fb555a4',
                    'token'       => 'Corporate History',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            161 =>
                array(
                    'id'          => 'a21f1268-0abe-4544-ba7f-4dedd5c91a67',
                    'token'       => '21.8 oz Olive Oil',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            162 =>
                array(
                    'id'          => 'a232a506-8682-4b95-9e1f-cf1b86e4a442',
                    'token'       => 'Green Laundering',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            163 =>
                array(
                    'id'          => 'a315afef-340e-4336-bb51-f5bdf96b1c5b',
                    'token'       => 'Top Sales Leaders',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            164 =>
                array(
                    'id'          => 'a42028ee-fc6b-4807-a0fe-2db8e7b18cad',
                    'token'       => '7 Titanium Plates',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            165 =>
                array(
                    'id'          => 'a4e5fc2b-af66-496a-a440-d080c3a3c1c8',
                    'token'       => 'Emails & Campaigns',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            166 =>
                array(
                    'id'          => 'a54214e2-3dc7-4266-b3ed-f43439710fb7',
                    'token'       => 'That\'s my house.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            167 =>
                array(
                    'id'          => 'a59e6e9e-6094-4b19-9d67-2c50ec6690e8',
                    'token'       => 'Super Easy to Use',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            168 =>
                array(
                    'id'          => 'a5b24959-da96-4726-9296-ae20fbb6b293',
                    'token'       => 'Your Distributor',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            169 =>
                array(
                    'id'          => 'a676aff0-e34b-425a-9f7b-1fc5bd2fc628',
                    'token'       => 'YEAR OLD COMPANY',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            170 =>
                array(
                    'id'          => 'a682eecd-6d95-40f8-9450-60afea0e6b41',
                    'token'       => 'distributors-ars',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            171 =>
                array(
                    'id'          => 'a6ac6c0e-59fe-447a-9b62-751276f7b9d4',
                    'token'       => 'Enagic India Open',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            172 =>
                array(
                    'id'          => 'a6eba59f-449d-499d-a6b2-1c4560aa0d9b',
                    'token'       => 'Quality and Power',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            173 =>
                array(
                    'id'          => 'a7c81f6f-ee22-4cfd-aad6-de3fb4b0890b',
                    'token'       => 'Non-EU Agreement',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            174 =>
                array(
                    'id'          => 'a8294a76-2632-449f-8f43-8f6d0d28f885',
                    'token'       => 'ESPRI Experience',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            175 =>
                array(
                    'id'          => 'a8c3b841-80f2-4cb6-87f8-01ca5309c90e',
                    'token'       => 'Payment System EU',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            176 =>
                array(
                    'id'          => 'a93b4bb1-2a7f-4975-b039-c68175a81b18',
                    'token'       => 'Thank you so much',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            177 =>
                array(
                    'id'          => 'aa31bd9d-d8af-4af1-831e-b927742efc99',
                    'token'       => 'Send Kangen eBook',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            178 =>
                array(
                    'id'          => 'ab2c46f4-47b8-47bd-a9bd-d0cccf0f593e',
                    'token'       => 'Under federal law,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            179 =>
                array(
                    'id'          => 'ab9f7204-e2ed-41e5-885c-4986f384a85c',
                    'token'       => 'Around the Globe',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            180 =>
                array(
                    'id'          => 'ae526fa8-ab2d-465b-888d-659061abc9ec',
                    'token'       => 'our hair, I mean,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            181 =>
                array(
                    'id'          => 'ae6a62b4-86f0-4ec0-be7c-70c4ff4d66f3',
                    'token'       => 'Name Change Form',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            182 =>
                array(
                    'id'          => 'ae8cfb3f-f2ad-4a6d-a29f-c38e0fe14ddc',
                    'token'       => 'Janine Jannicelli',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            183 =>
                array(
                    'id'          => 'aed7cef4-ce2f-4f80-bc98-0e4009c1d3b1',
                    'token'       => 'To get additional',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            184 =>
                array(
                    'id'          => 'b3616f27-7e5f-4f43-88f4-ae5c043769c8',
                    'token'       => 'Print-Ready Flyer',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            185 =>
                array(
                    'id'          => 'b3c018cc-8f72-4289-8fc8-02a7693f6d45',
                    'token'       => 'Visit Enagic Shop',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            186 =>
                array(
                    'id'          => 'b5091c3b-2d7d-4d88-9894-19d7aa4425e2',
                    'token'       => 'Avocado-Lime Dip',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            187 =>
                array(
                    'id'          => 'b69fda01-cf40-4996-bf94-1d0d0a86f9c1',
                    'token'       => 'Perfect Pairings:',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            188 =>
                array(
                    'id'          => 'b84b5406-fc36-4cd7-ac23-8cae797e4d4d',
                    'token'       => 'Compare Products',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            189 =>
                array(
                    'id'          => 'b8729425-a437-49f2-be13-a877bef7927f',
                    'token'       => 'French Polynesia',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            190 =>
                array(
                    'id'          => 'b9ee11e0-7a58-47f1-b522-1468fe5016d9',
                    'token'       => 'Protect Your Pet',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            191 =>
                array(
                    'id'          => 'bacb2e64-7b49-4bcd-bdc5-5d829ee777b0',
                    'token'       => 'Your Guest Tickets',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            192 =>
                array(
                    'id'          => 'badbd5b8-d37f-4e13-9d70-69b2b264e8f2',
                    'token'       => '2 tbsp olive oil',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            193 =>
                array(
                    'id'          => 'bb436955-88ff-4ac7-9310-27761c0a5e97',
                    'token'       => 'Kangen UKON Soap',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            194 =>
                array(
                    'id'          => 'bd2cc1f7-b33c-46e8-8892-1785de68649f',
                    'token'       => 'Can Kangen Water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            195 =>
                array(
                    'id'          => 'be250b47-d639-433a-bddb-ce73e39205fe',
                    'token'       => 'image description',
                    //'category'    => 'CAT_3',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            196 =>
                array(
                    'id'          => 'bf9dc649-f970-4df2-bf2f-2944298f5d3f',
                    'token'       => 'Enagic Comparison',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            197 =>
                array(
                    'id'          => 'bfac2b32-d21d-43a2-a34d-b16684c31df6',
                    'token'       => '8 Titanium Plates',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            198 =>
                array(
                    'id'          => 'c0385179-3e88-41c1-84e9-3c8a4a62f72e',
                    'token'       => 'Reference - NRDC',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            199 =>
                array(
                    'id'          => 'c0b505f0-71c9-4143-9d04-7a1add8beeb2',
                    'token'       => 'General Inquires',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            200 =>
                array(
                    'id'          => 'c2fd72b5-76e1-461b-b08c-a1450f916bf6',
                    'token'       => 'What makes Enagic',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            201 =>
                array(
                    'id'          => 'c3328845-dba5-456f-9eee-7f6ec0eb6cb0',
                    'token'       => '3 Titanium Plates',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            202 =>
                array(
                    'id'          => 'c3a9ae8a-afce-4360-924b-33281fe2eced',
                    'token'       => 'SEND THE EBOOK »',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            203 =>
                array(
                    'id'          => 'c43527cf-12f7-4a9d-b3da-ff3aadb1b51a',
                    'token'       => 'Forms for Austria',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            204 =>
                array(
                    'id'          => 'c4858ce3-7879-422d-adc1-0df51a319469',
                    'token'       => 'Usage Cheatsheet',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            205 =>
                array(
                    'id'          => 'c4d95d73-1806-4e57-b3a0-f1d71590a102',
                    'token'       => 'leveluk super 501',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            206 =>
                array(
                    'id'          => 'c6a52d59-f1d7-48cd-88e5-54336bb81822',
                    'token'       => 'The 5 Water Types',
                    //'category'    => 'CAT_9',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            207 =>
                array(
                    'id'          => 'c765e7df-8bbb-44c1-b491-419b8b478366',
                    'token'       => 'It\'s very light,',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            208 =>
                array(
                    'id'          => 'c8de07c5-0332-4021-a5bc-ecec2c747d1b',
                    'token'       => 'Filter Sale June',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            209 =>
                array(
                    'id'          => 'ca4a10d6-758c-4c08-bc0c-4709e319cc51',
                    'token'       => 'Level Selections',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            210 =>
                array(
                    'id'          => 'cb84f416-38ef-4118-b6f7-e68007da004a',
                    'token'       => '2 tbsp canola oil',
                    //'category'    => 'CAT_6',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            211 =>
                array(
                    'id'          => 'cbb1fc40-d6ff-448b-9702-c96b6a076fe2',
                    'token'       => 'Non-toxic Cleaning',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            212 =>
                array(
                    'id'          => 'cd431792-b134-41c7-8a36-82d16905f12a',
                    'token'       => 'Warranty: 3-year',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            213 =>
                array(
                    'id'          => 'cd7a120c-2b73-48ed-be0f-73d02c9419cc',
                    'token'       => 'Name for Nametag',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            214 =>
                array(
                    'id'          => 'cd8af720-f078-4905-ba8c-6760c03c9876',
                    'token'       => 'Filtering medium',
                    //'category'    => 'CAT_1',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            215 =>
                array(
                    'id'          => 'cf22c1e7-3115-459a-867d-6ea3bed83c6d',
                    'token'       => 'Card Information',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            216 =>
                array(
                    'id'          => 'cfe51265-2456-401a-8859-9bccf7e2e9c9',
                    'token'       => '2018 Enhancer Sale',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            217 =>
                array(
                    'id'          => 'd3358436-8464-4f1c-83df-56afd5000291',
                    'token'       => 'Other interests:',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            218 =>
                array(
                    'id'          => 'd6f75efe-ffeb-4bfa-9955-5e79bd06b6ce',
                    'token'       => '1/4 cup allspice',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            219 =>
                array(
                    'id'          => 'd8f9d349-6750-43c5-bc56-733c452cd615',
                    'token'       => 'Mineral Ion Water',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            220 =>
                array(
                    'id'          => 'd8fa9a16-c929-4ead-bdb3-42dad08d6bb9',
                    'token'       => '1 tbsp sesame oil',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            221 =>
                array(
                    'id'          => 'dad3226b-cbff-4f3b-836d-e7b0dcbcc97f',
                    'token'       => 'Healthy minerals',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            222 =>
                array(
                    'id'          => 'db5feac0-4d7d-48dd-8464-3e45ec9800ce',
                    'token'       => 'Protect your Pets',
                    //'category'    => 'CAT_5',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            223 =>
                array(
                    'id'          => 'dba887d8-351f-44fe-979e-4e323e7f880c',
                    'token'       => 'for beauty care?',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            224 =>
                array(
                    'id'          => 'dc4cfa65-b733-434f-8d04-57ab7363ddc0',
                    'token'       => 'The SD501 is the',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            225 =>
                array(
                    'id'          => 'dc853cc4-c971-423b-97e7-dd84cf30cce5',
                    'token'       => 'Email-Ready Flyer',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            226 =>
                array(
                    'id'          => 'dca9ddf0-fb67-4737-834d-f083078f2b2b',
                    'token'       => 'Aroma Spa opens.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            227 =>
                array(
                    'id'          => 'dd92488e-a920-4c3e-a91f-264857d67267',
                    'token'       => 'Distributors Ars',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            228 =>
                array(
                    'id'          => 'dfabc62e-fac7-46bb-80ba-2372624b5135',
                    'token'       => 'Send Cheatsheet »',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            229 =>
                array(
                    'id'          => 'e0897a7f-9640-4e1f-a602-1dc02fc27fdd',
                    'token'       => 'Not Manufacturers',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            230 =>
                array(
                    'id'          => 'e14c899b-f575-405f-8bc6-666e3acaa307',
                    'token'       => 'We got the money.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            231 =>
                array(
                    'id'          => 'e56b8f67-eeba-4686-9560-ff8e34b65234',
                    'token'       => 'How does it make',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            232 =>
                array(
                    'id'          => 'e71b93f5-d749-4476-9e32-54360861e436',
                    'token'       => 'Procédure Slimpay',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            233 =>
                array(
                    'id'          => 'e967da5a-66f0-4290-99f4-3937a4fa88fd',
                    'token'       => 'Chlorine Removal',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            234 =>
                array(
                    'id'          => 'ebad75fd-bb52-4d09-8198-ee583a75a22e',
                    'token'       => 'Patented softgel',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            235 =>
                array(
                    'id'          => 'ed69a98c-b458-4330-893f-e2c9cea6ad3f',
                    'token'       => 'Retailer Warranty',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            236 =>
                array(
                    'id'          => 'edb913bb-7112-4638-b188-d4e9bc74bb1d',
                    'token'       => 'enagic-dsa-ethics',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            237 =>
                array(
                    'id'          => 'ee61021b-d2f6-4db3-ac29-8300541cfe32',
                    'token'       => 'Other Categories',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            238 =>
                array(
                    'id'          => 'ee965cf8-56ba-4b83-a0f2-5c04558a5b6c',
                    'token'       => 'Genealogy Request',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            239 =>
                array(
                    'id'          => 'ef309c0f-0ea5-4dfa-bb44-343cf37a7b72',
                    'token'       => 'Kangen Fragrance',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            240 =>
                array(
                    'id'          => 'ef67dc44-0156-4c37-bbff-473146146738',
                    'token'       => 'in your business.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            241 =>
                array(
                    'id'          => 'efc6e80e-e685-49b0-b3e9-18772dae94cc',
                    'token'       => 'Machine Purchase',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            242 =>
                array(
                    'id'          => 'f0537cf6-03be-492d-b14a-cd0772273adc',
                    'token'       => 'Enagic Locations',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            243 =>
                array(
                    'id'          => 'f0aabecd-df1d-4d64-a68b-328ff3bd3c10',
                    'token'       => 'Enagic\'s Factory',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            244 =>
                array(
                    'id'          => 'f15b6821-bc1c-4247-8eea-3540b4079b39',
                    'token'       => 'Tokurei Agreement',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            245 =>
                array(
                    'id'          => 'f1e91c0e-70a2-40cc-9828-33afb39970eb',
                    'token'       => 'Enagic Dsa Ethics',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            246 =>
                array(
                    'id'          => 'f37837d1-d509-42e3-936a-e2fd5b2d6638',
                    'token'       => 'Don\'t miss out! ',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            247 =>
                array(
                    'id'          => 'f3a00e27-3b7d-41f6-bcea-54fe21a5eab7',
                    'token'       => 'Enagic News Post',
                    //'category'    => 'CAT_2',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            248 =>
                array(
                    'id'          => 'f3c90908-3a13-4a94-b6fb-54ea0811e72e',
                    'token'       => 'E-Payment System',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            249 =>
                array(
                    'id'          => 'f5c09985-49d0-4f44-a75f-5b596c0fea86',
                    'token'       => 'distributor-login',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            250 =>
                array(
                    'id'          => 'f6189479-7492-4322-86a9-5c9f873d4dcd',
                    'token'       => 'access to clean water.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            251 =>
                array(
                    'id'          => 'f634a461-6174-444f-a5c9-be00d01d31b5',
                    'token'       => '- [Narrator] Residents',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            252 =>
                array(
                    'id'          => 'f6378d55-f5e6-424f-8f88-715b57a78e3b',
                    'token'       => 'for the best quality',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            253 =>
                array(
                    'id'          => 'f64811c9-778b-4fbd-b894-444c4a19942c',
                    'token'       => 'and earn three points,',
                    //'category'    => 'CAT_6',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            254 =>
                array(
                    'id'          => 'f6c277fd-b3b3-41e0-8fd7-6305682e3e8d',
                    'token'       => 'Distributor Agreement',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:25:17',
                    'updated_at'  => '2023-01-24 19:25:17',
                    'deleted_at'  => null,
                ),
            255 =>
                array(
                    'id'          => 'f6e5184a-ee7f-442e-9ffd-1aa3e5304653',
                    'token'       => 'Doing the Dishes',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            256 =>
                array(
                    'id'          => 'f79449f8-c2c7-4b47-ab1e-8f0c154e4e5f',
                    'token'       => 'Anodized aluminum',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            257 =>
                array(
                    'id'          => 'f7c57c61-0fdc-4729-a6d1-ded356819d13',
                    'token'       => 'I\'ve never seen this.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            258 =>
                array(
                    'id'          => 'f8106ecb-f8a1-4655-8b99-cff4aa89a321',
                    'token'       => 'browse more news',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            259 =>
                array(
                    'id'          => 'f81642ab-7a4b-4e47-ab1f-8c416b1cd6b0',
                    'token'       => '1/2 tsp liquid soap',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            260 =>
                array(
                    'id'          => 'f8388eff-ee4b-43be-ae7b-a9cb2d721b01',
                    'token'       => 'WQA Official Gold Seal',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            261 =>
                array(
                    'id'          => 'f8a23a33-fb49-463c-98c6-0833752e65a5',
                    'token'       => 'In the Laundry Room',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            262 =>
                array(
                    'id'          => 'f8f60637-4efc-46f3-b9af-173a1b646328',
                    'token'       => 'at it for many years.',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            263 =>
                array(
                    'id'          => 'f90633c0-19b9-4dc1-8cf5-3151eb9e8942',
                    'token'       => 'What are cookies',
                    //'category'    => 'CAT_7',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            264 =>
                array(
                    'id'          => 'f96f3b81-86e3-4bb6-b1c6-9d2683b57b42',
                    'token'       => 'you give your business.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            265 =>
                array(
                    'id'          => 'f97e94c7-c8d7-47a1-a7e5-1e7b775116aa',
                    'token'       => 'So tap water containing',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            266 =>
                array(
                    'id'          => 'f9a63232-1ada-415f-9a80-4d845fbbbacd',
                    'token'       => 'Message from our CEO',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            267 =>
                array(
                    'id'          => 'f9d95837-60c2-4c12-a25a-30a0b224098a',
                    'token'       => '1/2 cup chicken broth',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            268 =>
                array(
                    'id'          => 'fa0b8c26-c3e0-4ebb-a325-45b6d34274a0',
                    'token'       => 'for having me, Olga.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            269 =>
                array(
                    'id'          => 'fab6f890-00b2-48db-924c-1e803b646f16',
                    'token'       => 'enagic-news-archive',
                    //'category'    => 'CAT_4',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:23:04',
                    'updated_at'  => '2023-01-24 19:23:04',
                    'deleted_at'  => null,
                ),
            270 =>
                array(
                    'id'          => 'faca9cd8-2a2d-400d-9e5a-36197968a4b7',
                    'token'       => 'enagic-news-article',
                    //'category'    => 'CAT_5',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            271 =>
                array(
                    'id'          => 'fb53eb8b-d7a4-4bac-98d6-680c0e7c2b68',
                    'token'       => 'Product Not Available',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            272 =>
                array(
                    'id'          => 'fb7d4ada-8020-4243-a1a6-fbf4f9d146ed',
                    'token'       => 'Astringent effect',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            273 =>
                array(
                    'id'          => 'fb94627e-9069-40c4-acc9-b38389d17120',
                    'token'       => '3. Toilet Maintenance',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            274 =>
                array(
                    'id'          => 'fbc8e2e3-0065-4d14-8766-82f27176fbd4',
                    'token'       => 'how to identify Ponzi',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            275 =>
                array(
                    'id'          => 'fcbe2689-93d2-4f12-8807-c07859190d54',
                    'token'       => '22. Duration of storage',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            276 =>
                array(
                    'id'          => 'fd780ee3-f847-413d-a670-6c816b276059',
                    'token'       => 'One of the greatest',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            277 =>
                array(
                    'id'          => 'fd828b9b-966c-4bb9-a04f-55fc583f4043',
                    'token'       => '• Macquarie Park',
                    //'category'    => 'CAT_2',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            278 =>
                array(
                    'id'          => 'fd92d43c-568c-49e7-82ef-df8aa92007c9',
                    'token'       => 'You\'ve got big plans',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            279 =>
                array(
                    'id'          => 'fda140f7-f08d-41d2-a46d-4c23472c2624',
                    'token'       => 'to drink the water.',
                    //'category'    => 'CAT_8',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:23:04',
                    'updated_at'  => '2023-01-24 19:23:04',
                    'deleted_at'  => null,
                ),
            280 =>
                array(
                    'id'          => 'fdb1409a-7a9c-43b1-a55a-f0c63f3bfeb3',
                    'token'       => 'HG-N water filter',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            281 =>
                array(
                    'id'          => 'fdc27375-fa85-4e1b-a2a8-d34ec6730792',
                    'token'       => '4 fresh thyme sprigs',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            282 =>
                array(
                    'id'          => 'fec63309-4302-4b84-b3ff-66c24052dffb',
                    'token'       => 'compounds, every day.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            283 =>
                array(
                    'id'          => 'fef604bd-9c94-4350-9000-361a44c1468c',
                    'token'       => 'Mineral Ion Water Spa',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            284 =>
                array(
                    'id'          => 'ff2be933-3c95-4fa8-b93f-9977ab98d2af',
                    'token'       => 'Using Your Compost',
                    //'category'    => 'CAT_0',
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:23:04',
                    'updated_at'  => '2023-01-24 19:23:04',
                    'deleted_at'  => null,
                ),
            285 =>
                array(
                    'id'          => 'ff62cf74-a2dd-42ac-a54a-6328df7171b0',
                    'token'       => 'and a huge community',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            286 =>
                array(
                    'id'          => 'ff6c371b-be15-49a0-82b9-9174590b2e49',
                    'token'       => 'Pending Confirmation',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            287 =>
                array(
                    'id'          => 'ff7f227d-3518-451e-9cd7-709527511241',
                    'token'       => 'Healthy Opportunity',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            288 =>
                array(
                    'id'          => 'ffab06a9-5b1b-4848-936a-43189993c5a4',
                    'token'       => 'Five Water Types',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                ),
            289 =>
                array(
                    'id'          => 'ffabed46-072d-4fd3-8e63-0a9331ec2d82',
                    'token'       => 'change your life, yes.',
                    //'category'    => null,
                    'locale_code' => 'en-us',
                    'created_at'  => '2023-01-24 19:17:34',
                    'updated_at'  => '2023-01-24 19:17:34',
                    'deleted_at'  => null,
                )
        ));
        //\DB::table('tokens')->insert(TestData::TOKENS);
    }
}
