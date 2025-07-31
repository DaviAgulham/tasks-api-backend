<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            ['name' => 'Comprar pan', 'completed' => false],
            ['name' => 'Estudiar Laravel', 'completed' => true],
            ['name' => 'Preparar prueba técnica', 'completed' => false],
        ]);
    }
}
