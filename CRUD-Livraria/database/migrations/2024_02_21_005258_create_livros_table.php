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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 60);
            $table->string('autor', 40);
            $table->date('dataLancamento');
            $table->string('genero', 25);
            $table->smallInteger('numeroPaginas');
            $table->timestamps();
        });

        $livros = array(
            array(
                'titulo' => 'Harry Potter e a Pedra Filosofal',
                'autor' => 'J.K. Rowling',
                'dataLancamento' => "1997-06-26",
                'genero' => 'Fantasia',
                'numeroPaginas' => 223
            ),
            array(
                'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel',
                'autor' => 'J.R.R. Tolkien',
                'dataLancamento' => "1954-07-29",
                'genero' => 'Fantasia',
                'numeroPaginas' => 576
            ),
            array(
                'titulo' => 'A Culpa é das Estrelas',
                'autor' => 'John Green',
                'dataLancamento' => "2012-01-10",
                'genero' => 'Romance',
                'numeroPaginas' => 288
            ),
            array(
                'titulo' => 'O Código Da Vinci',
                'autor' => 'Dan Brown',
                'dataLancamento' => "2003-03-18",
                'genero' => 'Suspense',
                'numeroPaginas' => 464
            ),
            array(
                'titulo' => 'A Menina que Roubava Livros',
                'autor' => 'Markus Zusak',
                'dataLancamento' => "2005-09-23",
                'genero' => 'Ficção Histórica',
                'numeroPaginas' => 480
            )
        );

        foreach($livros as $livro)
        {
            DB::table('livros')->insert([
                'titulo' => $livro['titulo'],
                'autor' => $livro['autor'],
                'dataLancamento' => $livro['dataLancamento'],
                'genero' => $livro['genero'],
                'numeroPaginas' => $livro['numeroPaginas'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
