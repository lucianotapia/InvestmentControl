<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->id('idAporte');            
            $table->unsignedBigInteger('carteira_id')->nullable();
            $table->foreign('carteira_id')->references('idCarteira')->on('carteiras');
            $table->unsignedBigInteger('conta_id')->nullable();
            $table->foreign('conta_id')->references('idConta')->on('contas');
            $table->date('data');
            $table->float('valor');
            $table->boolean('excluido')->default(false);
            $table->timestamp('deleted_at', $precision = 0)->nullable();
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
        Schema::dropIfExists('aportes');
    }
}
