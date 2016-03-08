<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('ss_code_typeSeeder');

        $this->command->info('ss_code_type table seeded!');
    }

}

class ss_code_typeSeeder extends Seeder {

    public function run()
    {
        DB::table('ss_code_types')->insert([
            'code_type' => 'ss_trail',
            'code_expdays' => 3,
            'code_transfer' => 1073741824,
            'code_type_name' => '三天试用'
        ]);
        DB::table('ss_code_types')->insert([
            'code_type' => 'ss_1m',
            'code_expdays' => 30,
            'code_transfer' => 53687091200,
            'code_type_name' => '包月套餐'
        ]);
        DB::table('ss_code_types')->insert([
            'code_type' => 'ss_3m',
            'code_expdays' => 91,
            'code_transfer' => 214748364800,
            'code_type_name' => '包季度套餐'
        ]);
        DB::table('ss_code_types')->insert([
            'code_type' => 'ss_6m',
            'code_expdays' => 183,
            'code_transfer' => 536870912000,
            'code_type_name' => '包半年套餐'
        ]);
        DB::table('ss_code_types')->insert([
            'code_type' => 'ss_12m',
            'code_expdays' => 365,
            'code_transfer' => 1073741824000,
            'code_type_name' => '包年套餐'
        ]);
    }

}
