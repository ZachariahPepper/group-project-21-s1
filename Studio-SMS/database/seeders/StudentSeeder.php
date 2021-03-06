<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/student-data.json');
        DB::table('students')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Student::create(array(
            'first_name' => $obj->first_name,
            'last_name' => $obj->last_name,
            'student_id' => $obj->student_id,
            'github' => $obj->github
            ));
        } 
    }
}
