<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteGrekovAdvertslistOnaOn extends Migration
{
    public function up()
    {
        Schema::dropIfExists('grekov_advertslist_ona_on');
    }
    
    public function down()
    {
        Schema::create('grekov_advertslist_ona_on', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('text');
            $table->string('image', 255);
            $table->string('type', 255)->default('\'basic\'');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
