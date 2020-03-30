<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrekovAdvertslistOnOn extends Migration
{
    public function up()
    {
        Schema::create('grekov_advertslist_on_on', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('text');
            $table->string('image', 255);
            $table->string('type', 255)->default('basic');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grekov_advertslist_on_on');
    }
}
