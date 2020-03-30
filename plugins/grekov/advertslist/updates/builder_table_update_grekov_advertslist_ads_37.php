<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds37 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('state')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('highlight')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->boolean('state')->nullable(false)->unsigned(false)->default(0)->change();
            $table->boolean('highlight')->nullable(false)->unsigned(false)->default(0)->change();
        });
    }
}
