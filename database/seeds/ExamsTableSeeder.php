<?php

use App\Exam;
use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::create([
            'exam_name' => 'A1',
        ]);
        Exam::create([
            'exam_name' => 'A2',
        ]);
        Exam::create([
            'exam_name' => 'B1',
        ]);
    }
}
