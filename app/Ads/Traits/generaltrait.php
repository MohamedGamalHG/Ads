<?php

namespace Ads\Traits;

trait GeneralTrait
{
    public  function success($msg = '',$code=404,$data=null)
    {
        return response()->json([
            'data'      => $data,
            'msg'       => $msg,
            'code'      => $code
        ]);
    }
    public  function error($msg = '',$code=404)
    {
        return response()->json([
            'msg'       => $msg,
            'code'      => $code
        ]);
    }
}
