<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('transaction_type', ['incoming', 'outgoing'])->default('outgoing');
			$table->enum('payment_type', ['single', 'tanda_terima'])->default('single');
            $table->decimal('discount_percent', 14, 2);
            $table->decimal('discount_nominal', 14, 2);
            $table->decimal('discount_amount', 14, 2);
            $table->integer('tax_id');
            $table->decimal('tax_percent', 14, 2);
            $table->decimal('tax_amount', 14, 2);
			$table->integer('master_id');
            $table->decimal('total_amount', 14, 2);
            $table->decimal('paid_amount', 14, 2);
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
