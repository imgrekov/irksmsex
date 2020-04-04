<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds45 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->boolean('paid')->default(0);
            $table->string('type', 255)->default(null)->change();
            $table->string('state', 255)->default(null)->change();
            $table->string('highlight', 255)->default(null)->change();
            $table->dropColumn('image1');
            $table->dropColumn('image2');
            $table->dropColumn('image3');
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->dropColumn('paid');
            $table->string('type', 255)->default('NULL')->change();
            $table->string('state', 255)->default('NULL')->change();
            $table->string('highlight', 255)->default('NULL')->change();
            $table->string('image1', 255)->nullable()->default('NULL');
            $table->string('image2', 255)->nullable()->default('NULL');
            $table->string('image3', 255)->nullable()->default('NULL');
        });
    }
}
