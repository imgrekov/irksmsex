<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistOnOn2 extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_on_on', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('image', 255)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_on_on', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('image', 255)->default('NULL')->change();
        });
    }
}
