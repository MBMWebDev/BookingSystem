<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('arrival');	
            $table->date('departure');
            $table->integer('nbr_nuits');
            $table->integer('nbr_adulte');
            $table->string('type_chambre');
            $table->integer('person_types0')->nullable(); //nombre enfant
            $table->integer('person_types1')->nullable(); //age_enfant1
            $table->integer('person_types2')->nullable(); //age_enfant3
            $table->integer('person_types3')->nullable(); //age_enfant3
            $table->integer('person_types4')->nullable(); //age_enfant4
            $table->integer('offre_id')->unsigned();
            $table->foreign('offre_id')->references('id')->on('offres');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('total');	
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
        Schema::dropIfExists('reservations');
    }
}
