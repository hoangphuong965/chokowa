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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('recruitment_type');
            $table->text('job_detail');
            $table->integer('min_hourly_wage');
            $table->integer('max_hourly_wage');
            $table->text('personal_equipment')->nullable();
            $table->enum('publishing_settings', ['公開', '非公開']);
            $table->timestamp('created_at')->useCurrent();
            $table->string('created_user');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->string('updated_user');
            $table->softDeletes();
            $table->string('deleted_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
