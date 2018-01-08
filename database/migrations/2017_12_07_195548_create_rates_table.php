<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('bitcoin', 15, 2);
            $table->decimal('etherum', 15, 2);
            $table->decimal('paypal', 15, 2);
            $table->decimal('webmoney', 15, 2);
            $table->decimal('itunes', 15, 2);
            $table->decimal('perfect_money', 15, 2);
            $table->decimal('amazon', 15, 2);
            $table->timestamps();
        });

        DB::table('rates')->insert([
            'bitcoin' => 1,
            'etherum' => 1,
            'paypal' => 1,
            'webmoney' => 1,
            'itunes' => 1,
            'perfect_money' => 1,
            'amazon' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rates');
    }
}
