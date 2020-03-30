<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds41 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('state', 255)->default('off')->change();
            $table->string('highlight', 255)->default('off')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('state', 255)->default(null)->change();
            $table->string('highlight', 255)->default(null)->change();
        });
    }
}
