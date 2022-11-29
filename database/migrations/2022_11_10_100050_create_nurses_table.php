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
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nickname')->nullable();
            $table->string('fullname')->nullable();
            $table->string('fullname_kana')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('zipcode')->nullable();
            $table->foreignId('mst_prefecture_id')->constrained()->cascadeOnDelete();
            $table->string('municipality')->nullable();
            $table->string('after_address')->nullable();
            $table->string('nearest_station')->nullable();
            $table->text('introduction')->nullable();
            $table->string('occupation')->nullable();
            $table->string('job_method')->nullable();
            $table->integer('desired_hourly_wage')->nullable();
            $table->integer('desired_holiday_hourly_wage')->nullable();
            $table->integer('home_visit_hourly_wage')->nullable();
            $table->string('graduation_school')->nullable();
            $table->date('graduation_date')->nullable();
            $table->text('other_information')->nullable();
            $table->string('financial_organization')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('deposit_type')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name_kana')->nullable();
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
        Schema::dropIfExists('nurses');
    }
};
