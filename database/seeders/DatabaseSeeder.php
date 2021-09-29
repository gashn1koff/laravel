<?php

namespace Database\Seeders;


use App\Models\Department;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create();
//        $this->call(ProductSeeder::class);
//        Department::factory(10)->create();
        $this->call(DepartmentSeeder::class);
        $this->call(WorkerSeeder::class);
        $this->call(ProductSeeder::class);
        DB::table('categories')->insert([
            'category' => Str::random(10),
            'description' => Str::random(20),
        ]);





    }
}
