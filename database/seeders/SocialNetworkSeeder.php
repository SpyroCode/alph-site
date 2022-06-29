<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_networks')->insert([
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 1,
                'code' => 'facebook',
                'name' => 'Facebook',
                'url' => 'https://www.facebook.com/spyrocodemx',
                'icon' => 'fa fa-facebook',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 2,
                'code' => 'twitter',
                'name' => 'Twitter',
                'url' => 'https://twitter.com/spyrocode',
                'icon' => 'fa fa-twitter',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 3,
                'code' => 'instagram',
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/spyrocode/',
                'icon' => 'fa fa-instagram',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 4,
                'code' => 'whatsapp',
                'name' => 'Whatsapp',
                'url' => 'index.php#',
                'icon' => 'fa fa-whatsapp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 5,
                'code' => 'mail',
                'name' => 'Mail',
                'url' => 'mailto:herenciaevencenter@gmail.com?Subject=Información',
                'icon' => 'fa fa-envelope',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
