<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_phone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('phone', 20);
            $table->tinyInteger('row_status')->default(1);
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
