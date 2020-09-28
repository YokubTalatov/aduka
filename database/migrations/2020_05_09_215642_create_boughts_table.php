<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoughtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boughts', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("user_id")
                ->constrained()
                ->onDelete("cascade");
            $table
                ->foreignId("goods_id")
                ->constrained()
                ->onDelete("cascade");
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
        Schema::dropIfExists('boughts');
    }
}
