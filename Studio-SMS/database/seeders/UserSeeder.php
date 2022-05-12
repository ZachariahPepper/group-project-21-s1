<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/user-data.json');
        DB::table('users')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            User::create(array(
            'name' => $obj->name,
            'email' => $obj->email,
            'password' => bcrypt('P@ssw0rd')
            ));
        } 
    }
}