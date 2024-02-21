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
                'dataLancamento' => date('Y-m-d', strtotime('26 de junho de 1997')),
                'genero' => 'Fantasia',
                'numeroPaginas' => 223
            ),
            array(
                'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel',
                'autor' => 'J.R.R. Tolkien',
                'dataLancamento' => date('Y-m-d', strtotime('29 de julho de 1954')),
                'genero' => 'Fantasia',
                'numeroPaginas' => 576
            ),
            array(
                'titulo' => 'A Culpa é das Estrelas',
                'autor' => 'John Green',
                'dataLancamento' => date('Y-m-d', strtotime('10 de janeiro de 2012')),
                'genero' => 'Romance',
                'numeroPaginas' => 288
            ),
            array(
                'titulo' => 'O Código Da Vinci',
                'autor' => 'Dan Brown',
                'dataLancamento' => date('Y-m-d', strtotime('18 de março de 2003')),
                'genero' => 'Suspense',
                'numeroPaginas' => 464
            ),
            array(
                'titulo' => 'A Menina que Roubava Livros',
                'autor' => 'Markus Zusak',
                'dataLancamento' => date('Y-m-d', strtotime('23 de setembro de 2005')),
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
