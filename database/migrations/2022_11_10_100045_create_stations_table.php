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
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->text('introduction');
            $table->string('zipcode');
            $table->foreignId('mst_prefecture_id')->constrained()->cascadeOnDelete();
            $table->string('municipality');
            $table->string('after_address');
            $table->text('map_link')->nullable();
            $table->integer('staff_average_age')->nullable();
            $table->string('director_name')->nullable();
            $table->string('graduation_school')->nullable();            
            $table->text('other_information')->nullable();
            $table->text('web_link')->nullable();
            $table->text('other_links')->nullable();
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
        Schema::dropIfExists('stations');
    }
};
