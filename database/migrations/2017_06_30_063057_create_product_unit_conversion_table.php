<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUnitConversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_unit_conversion', function (Blueprint $table) {
			$table->increments('id');      
			$table->integer('from_unit_id');
			$table->integer('to_unit_id');
			$table->string('from_value');
			$table->string('to_value');
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
