<?php

namespace Database\Seeders;

use App\Models\Worker;
use Database\Factories\WorkerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::factory(20)->create();
//        DB::table('workers')->insert([
//            'name'=>Str::random(10),
//            'second_name'=>Str::random(5),
//            'age'=>5,
//            'position'=>Str::random(10),
//            'department'=>Str::random(10),
//            'active'=>boolval(2)
//            ]);
    }
}
