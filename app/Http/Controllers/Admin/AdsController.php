<?php

namespace App\Http\Controllers\Admin;

use Ads\Services\AdsService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    protected  AdsService $ads;

    public function __construct(AdsService $adsservice){
        $this->ads = $adsservice;
    }
    public function show($id)
    {
        return $this->ads->show($id);
    }
    public function index()
    {
        return $this->ads->index();
    }
    public function store(Request $request)
    {
        return $this->ads->store($request);
    }

    public function update(Request $request,$id)
    {
        return $this->ads->update($request,$id);
    }
    public function destroy($id)
    {
        return $this->ads->delete($id);
    }
    public function filterCategory(Request $request)
    {
        return $this->ads->filterCategory($request);
    }
    public function filterTag(Request $request)
    {
        return $this->ads->filterTag($request);
    }
    public function advertiserAds(Request $request)
    {
        return $this->ads->advertiserAds($request);
    }
}
