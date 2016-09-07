<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMMainMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_main_menu', function (Blueprint $table) {
            $table->increments('main_menu_id');
            $table->string('main_menu_code')->unique();
            $table->integer('screen_id');
            $table->text('main_menu_remark')->nullable();
            $table->integer('main_menu_order')->nullable();
            $table->string('main_menu_tooltip_text')->nullable();
            $table->string('main_menu_icon')->nullable();
            $table->string('create_by')->comment('username ผู้สร้าง');
            $table->string('update_by')->comment('username ผู้แก้ไข');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_main_menu');
    }
}
