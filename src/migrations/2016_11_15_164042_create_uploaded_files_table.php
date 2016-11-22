<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!\Schema::hasTable('uploaded_files')) {
           \Schema::create('uploaded_files', function (Blueprint $table) {
               $table->increments('id');
               $table->string('uuid'); // /public/uploads/media/{uuid}/filename
               $table->string('filename'); // filename with extension
               $table->string('filetype'); // file type
               $table->integer('filesize'); // in bytes
               $table->string('tag')->default('');
               $table->timestamps();
           });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Schema::dropIfExists('uploaded_files');
    }
}
