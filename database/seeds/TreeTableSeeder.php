<?php

use Illuminate\Database\Seeder;

class TreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trees')->delete();
        DB::table('trees')->insert([
            ['id'=>1,'name'=>'cay lua'],
        ]);
    }
}
