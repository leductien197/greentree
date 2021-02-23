<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        DB::table('comments')->insert([
            ['id'=>1,'content'=>'cam on, bai viet rat huu ich'],
        ]);
    }
}
