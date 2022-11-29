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
        Schema::create('permission_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mst_permission_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mst_role_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('permission_role');
    }
};
