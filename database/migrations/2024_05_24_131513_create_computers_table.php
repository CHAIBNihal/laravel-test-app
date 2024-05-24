<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    // up pour crée une table au base de donnée
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->integer('price'); 
            $table->timestamps(); // cette propriet timestamps nous a crée created_at at updated_at
        });
    }

    // down pour suprimer une table au base de donnée
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
