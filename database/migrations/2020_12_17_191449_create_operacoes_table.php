<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Operacao;

class CreateOperacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacoes', function (Blueprint $table) {
            $table->id('idOperacao');            
            $table->string('ticker', 10);
            $table->string('operacao', 10); //Compra ou Venda            
            $table->date('data');
            $table->integer('qtde');
            $table->decimal('valor', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('operacoes');
    }
}
