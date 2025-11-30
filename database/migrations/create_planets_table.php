<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    
     

  public function up(): void{Schema::create('planets', function (Blueprint $table) {$table->id();$table->string('name');$table->string('description');$table->integer('size_in_km');$table->timestamps();});

        DB::table('planets')->insert([
            [
                'name' => 'Uranus', 
                'description' => 'De Blauwe planeet', 
                'size_in_km' => 69420, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'De zon', 
                'description' => 'De heetste ster', 
                'size_in_km' => 13920, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Earth', 
                'description' => 'Our home planet', 
                'size_in_km' => 12742, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }

    
     

  public function down(): void{Schema::dropIfExists('planets');}
};