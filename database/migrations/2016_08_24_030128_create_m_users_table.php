<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_first_name_th')->comment('ชื่อภาษาไทย');
            $table->string('user_last_name_th')->comment('นามสกุลภาษาไทย');
            $table->string('user_first_name_en')->nullable()->comment('ชื่อภาษาอังกฤษ');
            $table->string('user_last_name_en')->nullable()->comment('นามสกุลภาษาอังกฤษ');
            $table->string('email')->unique()->comment('อีเมลผู้ใช้งาน');
            $table->string('username')->unique()->comment('ชื่อผู้ใช้งาน');
            $table->string('password')->comment('รหัสผ่าน');
            $table->string('user_status')->default('W')->comment('สถานะผู้ใช้งาน W =รออนุมัติ, N = ปกติ , B=ระงับการใช้งาน ');
            $table->string('user_menu_layout')->nullable();
            $table->string('user_right_view')->nullable()->comment('ระดับการมองเห็น ตามสาขา หรือทั้งหมด');
            $table->string('user_privilege_id')->nullable()->comment('สิทธิ์หน้าจอ');
            $table->rememberToken();            
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
        Schema::drop('users');
    }
}
