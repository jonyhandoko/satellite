<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryOutgoingApproveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_outgoing_approve_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('outgoing_approve_id');
            $table->integer('product_id');
            $table->decimal('selling_price', 14, 2);
            $table->integer('qty');
            $table->text('note');
            $table->string('delivery_no',100);
			$table->string('vehicle',100);
			$table->string('driver',100);
			$table->string('delivery_date',100);
			$table->string('warehouse',100);
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
