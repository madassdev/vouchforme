<?php

use App\Models\Business;
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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('website')->nullable();
            $table->text('description')->nullable();
            $table->integer('stars')->default(1);
            $table->integer('reviews')->default(0);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });

        $user_id = User::first()->id;

        collect([
            [
                'user_id' => $user_id,
                'name' => 'Vouch For Me',
                'email' => 'vouchforme@mail.com',
                'website' => 'vouchforme.dv',
                'is_verified' => true
            ],
            [
                'user_id' => $user_id,
                'name' => 'Hello there',
                'email' => 'hellothere@mail.com',
                'website' => 'hellothere.com',
                'is_verified' => false
            ],
            [
                'user_id' => $user_id,
                'name' => 'Get Rich Quick',
                'email' => 'getrichquick@mail.com',
                'website' => 'getrichquick.com',
                'is_verified' => false
            ]
        ])->map(function ($business) {

            Business::create($business);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
