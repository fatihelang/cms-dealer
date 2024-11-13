<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('deskripsi'); // Deskripsi isi postingan
            $table->date('tanggal'); // Tanggal postingan
            $table->text('meta_deskripsi')->nullable(); // Meta deskripsi per postingan
            $table->text('meta_keywords')->nullable(); // Meta keywords per postingan
            $table->integer('view_count')->default(0); // Counter untuk klik postingan
            $table->json('gambar')->nullable();
            $table->string('file')->nullable();
            $table->integer('user_id');
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->softDeletes(); // Kolom deleted_at untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_artikel');
    }
}
