<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_rel', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('product_id');
			$table->bigInteger('item_product_id');
			$table->decimal('qty',14,2);
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
