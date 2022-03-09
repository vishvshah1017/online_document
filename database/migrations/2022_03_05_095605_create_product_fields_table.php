<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_fields', function (Blueprint $table) {
            $table->id();
            $table->string('field_name',100);
            $table->string('field_type',200);
            $table->string('field_id',200);
            $table->text('field_classes');
            $table->integer('product_id');
            $table->boolean('is_active',4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_fields');
    }
};
