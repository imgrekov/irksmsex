<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds11 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->boolean('state')->default(0);
            $table->string('image1', 255)->default('null')->change();
            $table->string('image2', 255)->default('null')->change();
            $table->string('image3', 255)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->dropColumn('state');
            $table->string('image1', 255)->default('\'null\'')->change();
            $table->string('image2', 255)->default('\'null\'')->change();
            $table->string('image3', 255)->default('\'null\'')->change();
        });
    }
}
