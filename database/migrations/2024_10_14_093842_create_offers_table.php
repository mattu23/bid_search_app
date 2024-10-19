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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('案件名');
            $table->unsignedBigInteger('type')->comment('案件タイプ');
            $table->unsignedBigInteger('category_id')->comment('案件形式ID');
            $table->foreign('category_id')->references('id')->on('offer_categories');
            $table->unsignedBigInteger('prefecture_id')->comment('都道府県ID');
            $table->foreign('prefecture_id')->references('id')->on('prefectures');
            $table->string('file')->comment('案件資料');
            $table->text('detail')->comment('案件詳細');
            $table->unsignedBigInteger('qualification_id')->comment('入札資格ID');
            $table->foreign('qualification_id')->references('id')->on('qualifications');
            $table->date('announcement_date')->comment('公示日');
            $table->date('bid_date')->comment('入札日');
            $table->string('winning_bidder')->comment('落札企業');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
