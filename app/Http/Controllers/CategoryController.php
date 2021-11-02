<?php
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    public function Category_view_all(){
        $Category = new Category();
        $array_Category = $Category->get_all();

        return view('Category/Category_view_all',[
            'array_Category' => $array_Category
        ]);
    }

    public function Category_view_insert() {
        return view('Category/Category_view_insert');
    }

    public function Category_process_insert() {
        $Category = new Category();
        $Category->category_name = Request::getTrustedHeaderName('category_name');
        $Category->insert();

        return redirect()->route('Category.Category_view_all');
    }
}
