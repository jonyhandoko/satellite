<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryOutgoingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_outgoing', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('customer_id');
          $table->string('outgoing_note', 255);
          $table->enum('outgoing_status', ['pending', 'approve'])->default('pending');
          $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
          $table->tinyInteger('row_status')->default(1);
          $table->date('transaction_date');
          $table->date('due_date');
          $table->integer('term_id');
          $table->text('internal_note');
          $table->text('memo');
          $table->integer('updated_by');
          $table->integer('created_by');
          $table->integer('deleted_by');
          $table->timestamp('deleted_at');
          $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
          $table->timestamp('created_at');
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
