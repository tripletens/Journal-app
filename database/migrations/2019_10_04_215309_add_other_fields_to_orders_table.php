<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->string('image')->nullable()->default('avatar.png');
            $table->string('description')->nullable();
            $table->string('title')->nullable();
            $table->string('link')->nullable();
            $table->string('price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->dropColumn('image');
            $table->dropColumn('description');
            $table->dropColumn('title');
            $table->dropColumn('link');
            $table->dropColumn('price');
        });
    }
}
