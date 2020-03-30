<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds33 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default(null)->change();
            $table->string('image2', 255)->default(null)->change();
            $table->string('image3', 255)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->string('image1', 255)->default('\'https://via.placeholder.com/700x400?text=irksmsex.ru\'')->change();
            $table->string('image2', 255)->default('\'https://via.placeholder.com/700x400?text=irksmsex.ru\'')->change();
            $table->string('image3', 255)->default('\'https://via.placeholder.com/700x400?text=irksmsex.ru\'')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
