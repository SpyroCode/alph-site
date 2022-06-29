<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_infos')->insert([
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 1,
                'address' => '1301 E Robinson Ave, Springdale',
                'phone_1' => '+1 479-387-0486',
                'phone_2' => '+1 479-409-9129',
                'location' => 'AR, United States',
                'email' => 'info@herenciaeventcenter.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
