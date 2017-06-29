<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaction_id');
            $table->bigInteger('transaction_master_id');
            $table->bigInteger('transaction_product_id');
            $table->string('transaction_type', 255);
            $table->decimal('transaction_selling_price', 14, 2);
            $table->decimal('transaction_buying_price', 14, 2);
            $table->bigInteger('transaction_plus_quantity')->default(0);
            $table->bigInteger('transaction_minus_quantity');
            $table->bigInteger('transaction_used_quantity');
            $table->bigInteger('transaction_minus_id');
            $table->tinyInteger('row_status')->default(1);
            $table->integer('updated_by');
            $table->integer('created_by');
            $table->integer('deleted_by');
            $table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
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
