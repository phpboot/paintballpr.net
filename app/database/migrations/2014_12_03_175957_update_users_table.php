<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function($table){
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');

    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function($table){
           $table->dropForeign('users_role_id_foreign');
        });
	}

}
