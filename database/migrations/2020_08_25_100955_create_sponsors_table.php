<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('email', 128)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('site_link')->nullable();
            $table->smallInteger('position')->nullable();
            $table->string('status', 25)->default('enable');
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
        Schema::dropIfExists('sponsors');
    }
}
