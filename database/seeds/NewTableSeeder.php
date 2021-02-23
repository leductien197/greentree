<?php

use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->delete();
        DB::table('news')->insert([
            ['id'=>1,'trees_id'=>1,'comment_id'=>1,'title'=>'bai viet so 1','symptom'=>'trieu chung so 1','content'=>'noi dung bai viet so 1','img'=>'noImage.jpg']
        ]);
    }
}
