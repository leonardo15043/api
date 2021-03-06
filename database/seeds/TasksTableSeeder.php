<?php
use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Task::create([
                'item' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
