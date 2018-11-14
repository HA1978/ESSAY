<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');//entier auto-incremente qui sera la cle primaire de la table
            $table->string('name'); // texte pour le nom
            $table->string('email')->unique(); // texte pour l'email (l'unique)
            $table->string('password');// texte pour le mot de passe(en fait une version crypter du mot de passe)
            $table->rememberToken();// genere par la methode "remenber token" qi sert pour l'authentification
            $table->timestamps();// creer created_at et updated_at dans la base de donnees
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
