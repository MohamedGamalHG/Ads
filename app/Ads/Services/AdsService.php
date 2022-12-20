<?php


namespace Ads\Services;


use Ads\Traits\GeneralTrait;
use App\Models\Ads;
use App\Models\Category;
use Illuminate\Http\Request;

class AdsService
{
    use GeneralTrait;
    public function index()
    {
        $item  = Ads::get();

        return  $this->success('Back Done',200,$item);
    }
    public function show($id)
    {
        $item = Ads::findOrFail($id);
        return $this->success('Back Done',200,$item);
    }
    public function store(Request $request)
    {
       // return $request;
        $item = Ads::create($request->only('title','type','description','start_date'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function update(Request $request,$id)
    {
        $item = Ads::where('id',$id)->update($request->only('title'));
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }
    public function delete($id)
    {
        $item = Ads::where('id',$id)->delete();
        if($item)
            return $this->success('Saved Done',200,);
        else
            return  $this->error('not saved');
    }

    public function filterCategory(Request $request)
    {
        $filter =  $request->filter;
        $item = Category::where(function ($q) use ($filter){
            $q->where('title','LIKE','%'.$filter.'%');
        })->get();
        return $item;
    }
    public function filterTag(Request $request)
    {
        $filter =  $request->filter;
        $item = Tag::where(function ($q) use ($filter){
            $q->where('title','LIKE','%'.$filter.'%');
        })->get();
        return $item;
    }
    public function advertiserAds(Request $request)
    {
        if($request->id)
            $user = $request->id;
        else
            $user = auth()->id();
        $item = Ads::where('advertiser_id',$user)->get();
        return $this->success('Back Done',200,$item);
    }


}
