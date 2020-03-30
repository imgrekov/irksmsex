<?php namespace Grekov\AdvertsList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrekovAdvertslistOnOn extends Migration
{
    public function up()
    {
        Schema::table('grekov_advertslist_on_on', function($table)
        {
            $table->string('image', 255)->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('grekov_advertslist_on_on', function($table)
        {
            $table->string('image', 255)->nullable(false)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
