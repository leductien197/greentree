<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            DB::statement('ALTER TABLE news ADD FULLTEXT `title` (`title`)');
            DB::statement('ALTER TABLE news ENGINE = MyISAM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            DB::statement('ALTER TABLE news DROP INDEX name'); // khi chạy lệnh rollback thì làm điều ngược lại với thằng trên thế thôi
        });
    }
}
