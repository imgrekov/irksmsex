<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds38 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('state', 255)->change();
            $table->string('highlight', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('state', 191)->change();
            $table->string('highlight', 191)->change();
        });
    }
}
