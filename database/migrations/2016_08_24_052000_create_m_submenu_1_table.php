<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSubmenu1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_submenu_1', function (Blueprint $table) {
            $table->increments('submenu_1_id');
            $table->integer('main_menu_id');
            $table->string('submenu_1_code');
            $table->integer('screen_id');
            $table->text('submenu_1_remark')->nullable();
            $table->integer('submenu_1_order')->nullable();
            $table->string('submenu_1_tooltip_text')->nullable();
            $table->string('submenu_1_icon')->nullable();
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
        Schema::drop('m_submenu_1');
    }
}
