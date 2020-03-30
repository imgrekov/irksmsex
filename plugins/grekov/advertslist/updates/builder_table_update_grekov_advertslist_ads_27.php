<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds27 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->nullable(false)->default(null)->change();
            $table->string('image2', 255)->nullable(false)->default(null)->change();
            $table->string('image3', 255)->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->nullable()->default('\'null\'')->change();
            $table->string('image2', 255)->nullable()->default('\'null\'')->change();
            $table->string('image3', 255)->nullable()->default('\'null\'')->change();
        });
    }
}
