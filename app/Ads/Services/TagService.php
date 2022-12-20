<?php


namespace Ads\Services;


use Ads\Traits\GeneralTrait;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagService
{
    use GeneralTrait;
    public function index()
    {
        $item  = Tag::get();

        return  $this->success('Back Done',200,$item);
    }
    public  function show($id)
    {
        $item = Tag::findOrFail($id);
        return $this->success('Back Done',200,$item);
    }
    public function store(Request $request)
    {
        $item = Tag::create($request->only('title'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function update(Request $request,$id)
    {
        $item = Tag::where('id',$id)->update($request->only('title'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function delete($id)
    {
        $item = Tag::where('id',$id)->delete();
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }

}
