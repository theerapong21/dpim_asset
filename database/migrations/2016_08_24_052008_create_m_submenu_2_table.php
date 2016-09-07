<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSubmenu2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_submenu_2', function (Blueprint $table) {
            $table->increments('submenu_2_id');
            $table->integer('submenu_1_id');
            $table->string('submenu_2_code');
            $table->integer('screen_id');
            $table->text('submenu_2_remark')->nullable();
            $table->integer('submenu_2_order')->nullable();
            $table->string('submenu_2_tooltip_text')->nullable();
            $table->string('submenu_2_icon')->nullable();
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
        Schema::drop('m_submenu_2');
    }
}
