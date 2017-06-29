<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryIncomingDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_incoming_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incoming_id');
            $table->integer('product_id');
            $table->decimal('buying_price', 14, 2);
            $table->integer('qty');
            $table->text('note');
            $table->tinyInteger('row_status')->default(1);
            $table->integer('updated_by');
            $table->integer('created_by');
            $table->integer('delete_by');
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
