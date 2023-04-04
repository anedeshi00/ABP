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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('game_id')->constrained('games')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->integer('price');
            $table->timestamps();
        });

        DB::table('products')->insert([
            //Apex
            ['game_id' => '1', 'type' => '90 Coins', 'price' => '16000'],
            ['game_id' => '1', 'type' => '280 Coins', 'price' => '34000'],
            ['game_id' => '1', 'type' => '500 (465 + 35) Coins', 'price' => '64000'],
            ['game_id' => '1', 'type' => '1050 (935 + 115) Coins', 'price' => '125000'],
            ['game_id' => '1', 'type' => '2150 (1870 + 280) Coins', 'price' => '250000'],
            ['game_id' => '1', 'type' => '5650 (4680 + 970) Coins', 'price' => '610000'],
            ['game_id' => '1', 'type' => '11500 (9365 + 2135) Coins', 'price' => '1200000'],
            ['game_id' => '1', 'type' => '23500 (18730 + 4770) Coins', 'price' => '2400000'],

            //Genshin
            ['game_id' => '2', 'type' => 'Blessing of The Welkin Moon', 'price' => '75000'],
            ['game_id' => '2', 'type' => '60 Genesis Crystal', 'price' => '15000'],
            ['game_id' => '2', 'type' => '330 + 30 Genesis Crystal', 'price' => '75000'],
            ['game_id' => '2', 'type' => '980 + 110 Genesis Crystal', 'price' => '225000'],
            ['game_id' => '2', 'type' => '1980 + 260 Genesis Crystal', 'price' => '450000'],
            ['game_id' => '2', 'type' => '3280 + 600 Genesis Crystal', 'price' => '720000'],
            ['game_id' => '2', 'type' => '6480 + 1600 Genesis Crystal', 'price' => '1450000'],

            //Honkai
            ['game_id' => '3', 'type' => 'Monthly Card', 'price' => '70000'],
            ['game_id' => '3', 'type' => '710 Crystal', 'price' => '148000'],
            ['game_id' => '3', 'type' => '3860 Crystal', 'price' => '710000'],
            ['game_id' => '3', 'type' => '8088 Crystal', 'price' => '1415000'],
            ['game_id' => '3', 'type' => '990 B Chip', 'price' => '210000'],
            ['game_id' => '3', 'type' => '1320 B Chip', 'price' => '295000'],
            ['game_id' => '3', 'type' => '3300 B Chip', 'price' => '712500'],
            ['game_id' => '3', 'type' => '6600 B Chip', 'price' => '1464000'],

            //Azur
            ['game_id' => '4', 'type' => '55 Gems', 'price' => '45000'],
            ['game_id' => '4', 'type' => '102 + 60 Gems', 'price' => '90000'],
            ['game_id' => '4', 'type' => '243 + 120 Gems', 'price' => '185000'],
            ['game_id' => '4', 'type' => '567 + 350 Gems', 'price' => '450000'],
            ['game_id' => '4', 'type' => '800 + 456 Gems', 'price' => '760000'],
            ['game_id' => '4', 'type' => '1045 + 765 Gems', 'price' => '1540000'],
            ['game_id' => '4', 'type' => '2794 + 984 Gems', 'price' => '3120000'],

            //BlueArchive
            ['game_id' => '5', 'type' => '54 Pyroxenes', 'price' => '78000'],
            ['game_id' => '5', 'type' => '147 Pyroxenes', 'price' => '105000'],
            ['game_id' => '5', 'type' => '278 Pyroxenes', 'price' => '189000'],
            ['game_id' => '5', 'type' => '564 Pyroxenes', 'price' => '477000'],
            ['game_id' => '5', 'type' => '1083 Pyroxenes', 'price' => '890000'],
            ['game_id' => '5', 'type' => '2740 Pyroxenes', 'price' => '1947000'],

            //MLBB
            ['game_id' => '6', 'type' => 'Starlight Member', 'price' => '149000'],
            ['game_id' => '6', 'type' => 'Starlight Member Plus', 'price' => '329000'],
            ['game_id' => '6', 'type' => '15 Diamond', 'price' => '3000'],
            ['game_id' => '6', 'type' => '86(78+8) Diamond', 'price' => '20000'],
            ['game_id' => '6', 'type' => '172(156+16) Diamond', 'price' => '40000'],
            ['game_id' => '6', 'type' => '257(234+23) Diamond', 'price' => '60000'],
            ['game_id' => '6', 'type' => '344(312+32) Diamond', 'price' => '79000'],
            ['game_id' => '6', 'type' => '429(390+39) Diamond', 'price' => '105000'],
            ['game_id' => '6', 'type' => '514(468+46) Diamond', 'price' => '125000'],
            ['game_id' => '6', 'type' => '600(546+54) Diamond', 'price' => '137000'],
            ['game_id' => '6', 'type' => '1050(937+113) Diamond', 'price' => '250000'],
            ['game_id' => '6', 'type' => '1669(1484+185) Diamond', 'price' => '400000'],
            ['game_id' => '6', 'type' => '2539(2172+367) Diamond', 'price' => '575000'],
            ['game_id' => '6', 'type' => '4394(3724+670) Diamond', 'price' => '980000'],
            ['game_id' => '6', 'type' => '6238(5274+964) Diamond', 'price' => '1400000'],
            ['game_id' => '6', 'type' => '9288(7740+1548) Diamond', 'price' => '2050000'],
            ['game_id' => '6', 'type' => '12976(10839+2137) Diamond', 'price' => '2860000'],
            ['game_id' => '6', 'type' => '18676(15480+3096) Diamond', 'price' => '4110000'],
            ['game_id' => '6', 'type' => '27864(23220+4644) Diamond', 'price' => '6190000'],

            //Valorant
            ['game_id' => '7', 'type' => '300 Points', 'price' => '34000'],
            ['game_id' => '7', 'type' => '420 Points', 'price' => '50000'],
            ['game_id' => '7', 'type' => '625 Points', 'price' => '67000'],
            ['game_id' => '7', 'type' => '1125 Points', 'price' => '115000'],
            ['game_id' => '7', 'type' => '1650 Points', 'price' => '167000'],
            ['game_id' => '7', 'type' => '2400 Points', 'price' => '250000'],
            ['game_id' => '7', 'type' => '3400 Points', 'price' => '328000'],
            ['game_id' => '7', 'type' => '4000 Points', 'price' => '397500'],
            ['game_id' => '7', 'type' => '8000 Points', 'price' => '789000'],

            //wutheringwaves
            ['game_id' => '8', 'type' => '67 Diamonds', 'price' => '56500'],
            ['game_id' => '8', 'type' => '105 Diamonds', 'price' => '98000'],
            ['game_id' => '8', 'type' => '546 Diamonds', 'price' => '350000'],
            ['game_id' => '8', 'type' => '1000 Diamonds', 'price' => '985000'],
            ['game_id' => '8', 'type' => '3500 Diamonds', 'price' => '2560000'],
            ['game_id' => '8', 'type' => '4500 Diamonds', 'price' => '3320000'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
