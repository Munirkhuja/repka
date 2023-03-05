<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = DB::table('categories')->select('id', 'category_name')->get();
        foreach ($categories as $category) {
            $new_category = \App\Category::find($category->id);
            $new_category->setTranslations('category_name',['en'=>$category->category_name]);
            $new_category->save();
        }
    }
}
