<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("project_id")->unsigned();
            $table->integer("companies_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->integer("days")->unsigned()->nullable();
            $table->integer("hours")->unsigned()->nullable();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("project_id")->references("id")->on("projects");
            $table->foreign("companies_id")->references("id")->on("companies");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
