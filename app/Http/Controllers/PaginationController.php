<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {

        $myArr = DB::table('person')->select('id','personName')->get();
        $list = [];
        foreach($myArr as $key) {   
            $list['id'] = $key->id;
            $list['name'] = $key->personName;
        }
  
        $data = $this->paginate($list,3);
        $data->setPath('paginate');
   
        return view('paginate', compact('list','myArr'));
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public function paginate($items, $perPage = 3, $page = null, $options = [])
    // {
    //     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    //     $items = $items instanceof Collection ? $items : Collection::make($items);
    //     return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    // }

    public static function paginate($items, $perPage = 3, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        
        return new LengthAwarePaginator($itemstoshow ,$total   ,$perPage);
    }
}
