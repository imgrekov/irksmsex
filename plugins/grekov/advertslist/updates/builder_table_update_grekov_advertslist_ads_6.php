<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistAds6 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('image1', 255)->default('null')->change();
            $table->string('image2', 255)->default('null')->change();
            $table->string('image3', 255)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_ads', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('image1', 255)->default('\'null\'')->change();
            $table->string('image2', 255)->default('NULL')->change();
            $table->string('image3', 255)->default('NULL')->change();
        });
    }
}
