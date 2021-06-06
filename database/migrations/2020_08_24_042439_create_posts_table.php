<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->smallInteger('category_id')->index();
            $table->smallInteger('district_id')->index();
            $table->smallInteger('upazila_id')->index();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->longText('description');
            $table->decimal('salary_from', 10, 2)->index();
            $table->decimal('salary_to', 10, 2)->index();
            $table->string('status', 25)->default('pending')->index();
            $table->smallInteger('featured_post')->default(0)->index();
            $table->smallInteger('post_position')->nullable();
            $table->string('job_type', 25);
            $table->date('end_date');
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
        Schema::dropIfExists('posts');
    }
}
