<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 20)->unique()->comment('用户登陆名');
            $table->string('realname', 20)->index()->comment('用户真实姓名');
            $table->string('password', 60)->comment('用户密码');
            $table->string('avatar')->nullable()->comment('用户头像');
            $table->string('sex', 10)->comment('用户性别');
            $table->string('phone', 20)->nullable()->index()->comment('用户联系电话');
            $table->boolean('status')->default(0)->comment('用户帐号状态, 0:锁定状态, 1:正常使用');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('users');
    }
}
