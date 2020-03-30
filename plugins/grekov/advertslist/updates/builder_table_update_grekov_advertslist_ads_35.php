<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds35 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
