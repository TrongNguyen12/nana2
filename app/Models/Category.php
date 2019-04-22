<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    public function get_child_cate()
    { 
        return $this->where('parent_id', $this->id)->get();
    }
    public function product_brand()
    {
        return $this->hasMany('App\Models\Product', 'brand_id', 'id');
    }
    public function product()
    {
        return $this->belongsToMany('App\Models\Product', 'product_category', 'category_id', 'product_id');
    }
    public static function category_save($request, $id = null, $type = null)
    {
        $category = Category::where([
            ['type', $type],
            ['id', $id]
        ])->first();

        if (!isset($category)) {
            $category = new Category();
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        $category->type = $type;

        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $result = $category->save();

        return $request ? $category : false;
    }
}
