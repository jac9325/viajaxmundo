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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->string("surname",120);
            $table->string("email",200)->unique;
            $table->string("country",50)->nullable;
            $table->date("date",200);
            $table->string("phone",25)->nullable;
            $table->string("user",200);
            $table->string("password",200);
            $table->integer("status");
            $table->foreignId("profile_id")->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
};
