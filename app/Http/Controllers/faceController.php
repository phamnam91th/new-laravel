<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
// use App\Utils\Paginate;

class faceController extends Controller
{
    public function detect() {
        $personList = DB::table('person')
        ->select('personName')
        ->get();
        return view('frontend.pages.faceDetect')->with([
            'personList' => $personList
        ]);
        // return view('frontend.pages.faceDetect');
    }

    public function getArr() {
        $myArr = DB::table('person')->select('personName')->get();
        $listName = [];
        foreach($myArr as $key) {
            $listName[] = $key->personName;
        }

        $listName = $this->paginate($listName,3);
        $listName->setPath('test');
   
        return view('frontend.pages.test', compact('listName'));

    }

    public static function paginate($items, $perPage = 5, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        
        return new LengthAwarePaginator($itemstoshow ,$total   ,$perPage);
    }
}
