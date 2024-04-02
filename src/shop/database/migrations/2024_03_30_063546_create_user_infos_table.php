<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('ユーザーID');
            $table->string('full_name')->comment('氏名');
            $table->string('tel')->comment('電話番号');
            $table->string('postal_code')->comment('郵便番号');
            $table->string('pref')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('town')->comment('町名番地等');
            $table->string('building')->nullable()->comment('建物等');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
