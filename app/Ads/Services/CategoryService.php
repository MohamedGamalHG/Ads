<?php


namespace Ads\Services;


use Ads\Traits\GeneralTrait;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    use GeneralTrait;
    public function index()
    {
        $item  = Category::get();

        return  $this->success('Back Done',200,$item);
    }
    public function show($id)
    {
        $item = Category::findOrFail($id);
        return $this->success('Back Done',200,$item);
    }
    public function store(Request $request)
    {
        $item = Category::create($request->only('title'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function update(Request $request,$id)
    {
        $item = Category::where('id',$id)->update($request->only('title'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function delete($id)
    {
        $item = Category::where('id',$id)->delete();
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }

}
