<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sku');
            $table->decimal('modal_price', 10, 0);
            $table->integer('big_unit_id');
            $table->integer('small_unit_id');
            $table->string('product_name', 255);
            $table->integer('brand_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->decimal('min_sell_price', 10, 0);
            $table->text('description');
            $table->integer('stock_limit');
            $table->integer('stock_current');
            $table->integer('unit_id');
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
