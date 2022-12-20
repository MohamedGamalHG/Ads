<?php

namespace App\Http\Controllers\Admin;

use Ads\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    protected  CategoryService $cat;

    public function __construct(CategoryService $catservice){
            $this->cat = $catservice;
    }
    public function show($id)
    {
        return $this->cat->show($id);
    }
    public function index()
    {
        return $this->cat->index();
    }
    public function store(Request $request)
    {
        return $this->cat->store($request);
    }

    public function update(Request $request,$id)
    {
        return $this->cat->update($request,$id);
    }
    public function destroy($id)
    {
        return $this->cat->delete($id);
    }
}
