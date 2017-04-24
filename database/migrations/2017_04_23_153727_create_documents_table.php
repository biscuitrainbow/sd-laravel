<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id')->unsigned()->nullable();
            $table->integer('document_type_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });


        Schema::table('documents', function (Blueprint $table) {
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');

            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->onDelete('cascade');


            $table->foreign('document_type_id')
                ->references('id')->on('document_types')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('documents');
    }
}
