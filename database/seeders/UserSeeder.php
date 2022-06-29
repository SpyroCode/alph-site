<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'index' => 1,
                'name' => 'Admin',
                'email' => 'contacto@spyrocode.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Spyr0204!2018'),
                'role_id' => Role::where('code', 'admin')->firstOrFail()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
