<?php

namespace App\Http\Controllers;

use App\Models\FYP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FYPController extends Controller
{
    public function index($sort = 'asc')
    {
        if ($sort == 'desc') {
            $datas = DB::select('select * from final_year_projects order by title desc');
        } else {
            $datas = DB::select('select * from final_year_projects order by title asc');
        }
        return view('fyps.index', compact('datas', 'sort'));
    }
}
