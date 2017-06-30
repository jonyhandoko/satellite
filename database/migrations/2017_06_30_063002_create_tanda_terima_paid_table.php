<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTandaTerimaPaidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('tanda_terima_paid', function (Blueprint $table) {
			$table->increments('id');      
			$table->integer('tanda_terima_id');
			$table->decimal('total_amount',14,2);
			$table->decimal('total_paid',14,2);
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
