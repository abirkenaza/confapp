<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->integer('article_id');
            $table->integer('f_reviseur_id')->nullable();
            $table->integer('s_reviseur_id')->nullable();
            $table->double('f_reviseur_note', 8, 2)->nullable();
            $table->double('s_reviseur_note', 8, 2)->nullable();
            $table->double('note_global', 8, 2)->nullable();
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
        Schema::dropIfExists('revisions');
    }
}
