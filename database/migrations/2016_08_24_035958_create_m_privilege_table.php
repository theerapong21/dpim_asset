<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPrivilegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_privilege', function (Blueprint $table) {
            $table->increments('privilege_id');
            $table->string('privilege_code')->unique()->comment('รหัสสิทธิ์');
            $table->string('privilege_name_th')->comment('ชื่อภาษาไทย');
            $table->string('privilege_name_en')->nullable()->comment('ชื่อภาษาอังกฤษ');
            $table->json('privilege_permissions')->comment('json data สิทธิ์หน้าจอ ');
            $table->text('privilege_remark')->nullable()->comment('หมายเหตุ');
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
        Schema::drop('m_privilege');
    }
}
