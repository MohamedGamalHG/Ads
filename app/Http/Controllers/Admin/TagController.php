<?php

namespace App\Http\Controllers\Admin;

use Ads\Services\TagService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    protected  TagService $tag;

    public function __construct(TagService $tagservice){
        $this->tag = $tagservice;
    }
    public function show($id)
    {
        return $this->tag->show($id);
    }
    public function index()
    {
        return $this->tag->index();
    }
    public function store(Request $request)
    {
        return $this->tag->store($request);
    }

    public function update(Request $request,$id)
    {
        return $this->tag->update($request,$id);
    }
    public function destroy($id)
    {
        return $this->tag->delete($id);
    }
}
