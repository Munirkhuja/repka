<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCategoriesCategoryNameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function($table)
        {
            $table->dropIndex('categories_category_name_index');
        });
        Schema::table('categories', function($table)
        {
            $table->text('category_name')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function($table)
        {
            $table->string('category_name',191)->change();
        });
        Schema::table('categories', function($table)
        {
            $table->index('category_name');
        });
    }
}
