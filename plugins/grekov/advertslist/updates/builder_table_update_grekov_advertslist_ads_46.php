<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds46 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('type', 255)->default('basic')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('type', 255)->default(null)->change();
        });
    }
}
