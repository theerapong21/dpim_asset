<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_office', function (Blueprint $table) {
            $table->increments('office_id');
            $table->string('office_code');
            $table->string('office_name');
            $table->string('office_detail')->nullable();
            $table->string('office_abbreviation');
            $table->integer('office_order')->nullable();
            $table->integer('office_published')->default(1)->nullable();
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
        Schema::drop('m_office');
    }
}
