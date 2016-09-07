<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMScreenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_screens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('screen_code')->unique();
            $table->string('screen_name_th')->comment('ชื่อภาษาไทย');
            $table->string('screen_name_en')->nullable()->comment('ชื่อภาษาอังกฤษ');
            $table->string('screen_path');
            $table->integer('screen_order')->nullable();
            $table->text('screen_remark')->nullable();
            $table->string('create_by')->comment('username ผู้สร้าง');
            $table->string('update_by')->nullable()->comment('username ผู้แก้ไข');
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
        Schema::drop('m_screens');
    }
}
