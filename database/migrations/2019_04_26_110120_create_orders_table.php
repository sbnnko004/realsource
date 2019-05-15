<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('user_id');
            $table->integer('step')->default(1);
            $table->integer('line_spacing')->nullable();
            $table->integer('page_count')->nullable();
            $table->integer('project_purpose')->nullable();
            $table->integer('project_type')->nullable();
            $table->integer('type_of_writing')->nullable();
            $table->integer('writer_preference')->nullable();
            $table->integer('writer_by_order_id')->nullable();
            $table->integer('writing_level')->nullable();
            $table->string('deadline_date')->nullable();
            $table->string('deadline_time')->nullable();
            $table->integer('formating')->nullable();
            $table->integer('number_of_sources')->nullable();
            $table->mediumText('project_specs')->nullable();
            $table->string('project_title')->nullable();
            $table->integer('subject')->nullable();
            $table->integer('subject_area')->nullable();
            $table->boolean('upload_later')->nullable();
            $table->boolean('file_uploaded')->nullable();
            $table->decimal('cost', 8, 2)->default(0);
            $table->decimal('amount_paid', 8, 2)->default(0);
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
        Schema::dropIfExists('orders');
    }
}
