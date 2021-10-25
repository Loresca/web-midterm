<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\MobileLegendStat;

class MobileLegendControllerAPI extends Controller
{

    public function index()
    {
        $stats = MobileLegendStat::all();

        return response()->json(['stats'=>$stats],200);
    }

}
