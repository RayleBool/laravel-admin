<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->default(0)->comment('微信用户id');
            $table->string('email')->unique()->default();
            $table->string('password')->default('');
            $table->string('token')->default('')->comment('登录的token');
            $table->smallInteger('status')->default(1)->comment('1:可用，2：不可用');
            $table->smallInteger('role')->default(1)->comment('1:超级管理员，2:开发，3：客服');
            $table->string('login_ip')->default('');
            $table->timestamp('logined_at')->default();
            $table->unsignedInteger('logined_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
