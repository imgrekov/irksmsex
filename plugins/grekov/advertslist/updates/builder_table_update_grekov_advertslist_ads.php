<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds extends Migration
{
    public function up()
    {
        Schema::rename('grekov_advertslist_on_on', 'grekov_advertslist_ads');
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('category', 255);
            $table->string('image', 255)->default('null')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::rename('grekov_advertslist_ads', 'grekov_advertslist_on_on');
        Schema::table('grekov_advertslist_on_on', function($table)
        {
            $table->dropColumn('category');
            $table->string('image', 255)->default('\'null\'')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
