<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds10 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default('null')->change();
            $table->string('image2', 255)->default('null')->change();
            $table->string('image3', 255)->default('null')->change();
            $table->dropColumn('state');
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default('\'null\'')->change();
            $table->string('image2', 255)->default('\'null\'')->change();
            $table->string('image3', 255)->default('\'null\'')->change();
            $table->string('state', 255);
        });
    }
}
