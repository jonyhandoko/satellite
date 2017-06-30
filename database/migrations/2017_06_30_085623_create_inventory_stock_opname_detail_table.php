<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryStockOpnameDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_stock_opname_detail', function (Blueprint $table) {
			$table->increments('id');            
			$table->integer('stock_opname_id');
			$table->integer('product_id');
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
