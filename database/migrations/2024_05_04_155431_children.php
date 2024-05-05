<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('children', function(Blueprint $table){
            $table-> id();
            $table-> string('name', 20);
            $table-> string('last_name', 20);
            $table-> integer('age');
            $table-> string('school_grade', 10);
            $table-> string('mother', 40);
            $table-> string('father', 40);
            $table-> timestamps();
        });
    }

    public function down(): void
    {
        schema::dropIfExists('children');
    }
};
