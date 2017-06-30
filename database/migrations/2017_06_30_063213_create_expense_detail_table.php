<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_detail', function (Blueprint $table) {
			$table->increments('id');      
			$table->bigInteger('expense_id');
			$table->string('description',255);
			$table->decimal('amount',14,2);
			$table->string('note',1000);
			$table->integer('updated_by');
			$table->integer('created_by');
			$table->integer('deleted_by');
			$table->timestamp('updated_at')->nullable();
			$table->timestamp('created_at')->nullable();
			$table->timestamp('deleted_at')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
