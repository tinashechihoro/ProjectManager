<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable("projects")){
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->longText("description")->nullable();
                $table->integer("company_id")->unsigned();
                $table->integer("user_id")->unsigned();
                $table->integer("days")->unsigned()->nullable();
                $table->foreign("user_id")->references("id")->on("users");
                $table->foreign("company_id")->references("id")->on("companies");
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
