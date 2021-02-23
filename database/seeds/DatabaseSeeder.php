<?php

use App\Model\News;
use App\Model\Tree;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(TreeTableSeeder::class);
        $this->call(NewTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
