<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds31 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default('https://via.placeholder.com/700x400?text=irksmsex.ru')->change();
            $table->string('image2', 255)->default('https://via.placeholder.com/700x400?text=irksmsex.ru')->change();
            $table->string('image3', 255)->default('https://via.placeholder.com/700x400?text=irksmsex.ru')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default('\'none.jpg\'')->change();
            $table->string('image2', 255)->default('\'none.jpg\'')->change();
            $table->string('image3', 255)->default('\'none.jpg\'')->change();
        });
    }
}
