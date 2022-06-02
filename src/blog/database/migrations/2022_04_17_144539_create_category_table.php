<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("category", function (Blueprint $table) {
            $table->id();
            $table->string("title")->comment("Название категории");
            $table
                ->string("description")
                ->nullable()
                ->comment("Описание раздела");
            $table
                ->unsignedBigInteger("parent_category_id")
                ->comment("Базовая категория")
                ->default(0);
            $table
                ->foreign("parent_category_id")
                ->references("id")
                ->on("category");
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
        Schema::dropIfExists("category");
    }
};
