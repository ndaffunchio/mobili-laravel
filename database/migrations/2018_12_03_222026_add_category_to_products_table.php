<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unique('name')->change();
            $table->unsignedInteger('price')->change();
            $table->unsignedSmallInteger('category_id')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique('products_name_unique');
            $table->decimal('price', 10, 2)->change();
            $table->dropColumn('category_id');
        });
    }
}
