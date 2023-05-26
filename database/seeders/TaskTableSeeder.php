<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taches = [
            [
                'title' => 'Tache 1',
                'description' => 'desc1',
                'completed' => true,

            ],
              [
                'title' => 'Tache 1',
                'description' => 'desc1',
                'completed' => true,

            ],


        ];
        foreach ($taches as $key => $value) {
            Task::create($value);
        }
    }
}
