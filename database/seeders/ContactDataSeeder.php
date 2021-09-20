<?php

namespace Database\Seeders;

use App\Models\ContactData;
use Illuminate\Database\Seeder;

class ContactDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactData::factory(100)->create();
    }
}
