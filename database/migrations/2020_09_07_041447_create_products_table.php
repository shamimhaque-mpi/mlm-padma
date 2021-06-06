<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->smallInteger('category_id')->index();
            $table->smallInteger('subcategory_id')->index();
            $table->smallInteger('brand_id')->index();
            $table->string('unit', 25)->index();
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('regular_price', 10, 2);
            $table->smallInteger('offer')->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->date('discount_duration')->nullable();
            $table->smallInteger('point');
            $table->string('min_delivery_day', 15)->nullable();
            $table->string('max_return_day', 15)->nullable();
            $table->smallInteger('min_order_qty')->nullable();
            $table->string('warranty', 128)->nullable();
            $table->string('feature_product', 25)->default(0)->index();
            $table->smallInteger('position')->index();
            $table->string('status', 25)->default('active')->index();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
