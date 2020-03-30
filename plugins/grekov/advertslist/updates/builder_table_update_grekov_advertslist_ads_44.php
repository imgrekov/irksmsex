<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds44 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('type', 255)->nullable()->default(null)->change();
            $table->string('image1', 255)->default(null)->change();
            $table->string('image2', 255)->default(null)->change();
            $table->string('image3', 255)->default(null)->change();
            $table->string('state', 255)->default(null)->change();
            $table->string('highlight', 255)->default(null)->change();
    
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('type', 255)->nullable(false)->default('\'basic\'')->change();
            $table->string('image1', 255)->default('NULL')->change();
            $table->string('image2', 255)->default('NULL')->change();
            $table->string('image3', 255)->default('NULL')->change();
            $table->string('state', 255)->default('NULL')->change();
            $table->string('highlight', 255)->default('NULL')->change();
    
        });
    }
}
