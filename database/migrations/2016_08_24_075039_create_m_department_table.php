<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_department', function (Blueprint $table) {
            $table->increments('department_id');
            $table->integer('office_id');
            $table->string('department_code');            
            $table->string('department_name');
            $table->string('department_remark');
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
        Schema::drop('m_department');
    }
}
