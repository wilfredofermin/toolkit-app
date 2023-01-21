<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('displayname')->nullable();
            $table->string('username')->unique();
            $table->string('initials')->nullable();
            $table->string('cn')->nullable();
            $table->string('sn')->nullable();
            $table->string('givenname')->nullable();
            $table->string('objectguid')->nullable(); // Added here.
            $table->string('password')->nullable();
            $table->string('postofficebox')->nullable();
            $table->string('email')->nullable();
            $table->string('userprincipalname')->nullable();
            $table->string('telephonenumber')->nullable();
            $table->string('description')->nullable();
            $table->string('title')->nullable();
            $table->string('department')->nullable();
            $table->string('useraccountcontrol')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('physicaldeliveryofficename')->nullable();
            $table->string('company')->nullable();
            $table->string('user_template')->nullable();
            $table->string('manager')->nullable();
            $table->string('lockouttime')->nullable();
            $table->string('whencreated')->nullable();
            $table->string('whenchanged')->nullable();
            $table->string('pwdlastset')->nullable();
            $table->string('lastlogontimestamp')->nullable();
            $table->string('lastlogoff')->nullable();
            $table->string('logoncount')->nullable();
            $table->string('badpwdcount')->nullable();
            $table->string('msexcharchivename')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
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
        Schema::dropIfExists('users');
    }
};
