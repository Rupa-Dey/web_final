<?php

namespace Database\Seeders;

use App\Models\employeeinfo;
use Illuminate\Database\Seeder;

class employeeinfoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        employeeinfo::factory(500)->create();
    }
}
