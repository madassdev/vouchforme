<?php

use App\Models\User;
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
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->text('avatar')->nullable();
            $table->string('auth_type')->nullable()->default('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Frankish',
            'email' => 'favescsskr@gmail.com',
            'password' => bcrypt('password'),
        ]);
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
