<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable(); // Untuk bio singkat
            $table->string('address')->nullable(); // Untuk alamat
            $table->string('phone')->nullable(); // Untuk nomor telepon
            $table->string('facebook')->nullable(); // Untuk link profil Facebook
            $table->string('twitter')->nullable(); // Untuk link profil Twitter
            $table->string('instagram')->nullable(); // Untuk link profil Instagram
            $table->string('linkedin')->nullable(); // Untuk link profil LinkedIn
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'bio',
                'address',
                'phone',
                'facebook',
                'twitter',
                'instagram',
                'linkedin',
                'image'
            ]);
        });
    }
}
