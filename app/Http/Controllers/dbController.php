<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use stdClass;

class dbController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
        return view('backend.dashboard');
    }

    public function showData() {
        // $personList = ['1'];
        $personList = DB::table('person')
        ->select('id')
        ->get();
        $listData = [];
        $listName = array();
        foreach($personList as $person) {
            $personData = DB::table('person')  
            ->leftJoin('data','person.id', '=', 'data.personId')
            ->select('person.id','person.personName','data.path','data.name')
            ->where('person.id','=',$person->id)
            ->get();
            $listName[] = $personData[0]->personName; 
            $p = new stdClass;
            $p->id = $personData[0]->id;
            $p->name = $personData[0]->personName;
            $p->img = [];
            foreach($personData as $item) {
                $p->img[] = $item->path.'/'.$item->name; 
            }
            $listData[] = $p;
        }
        
        $listData = $this->paginate($listData,8);
        $listData->setPath('show-item');

        return view('backend.pages.personList', compact('listData','listName'));
    }

    public static function paginate($items, $perPage = 3, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        
        return new LengthAwarePaginator($itemstoshow ,$total   ,$perPage);
    }

    public function newPerson(Request $request) {
        return view('backend.pages.newPerson');
    }

    public function addPerson(Request $request) {
        $name = $request->name;
        // $create_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $create_at = date("Y-m-d H:i:s");
        $path = 'js/data/'.$name;
        File::makeDirectory($path);
        // Storage::makeDirectory($path);
        DB::table('person')->insert([
            'personName' => $name,
            'create_at' => $create_at
        ]);
        return redirect() -> route('personList');
    }

    public function newPicture($id, $name) {
        return view('backend.pages.uploadFile')->with([
            'id' => $id,
            'name' => $name
        ]);
    }
    
    public function uploadPicture($id, $name,Request $request) {
        $photo = $request->file('photo');
        if($photo) {
            $name_photo = $photo->getClientOriginalName();
            $dir = 'js/data/'.$name;
            $photo->move($dir, $name_photo);
        }
        DB::table('data')->insert([
            'personId' => $id,
            'path' => $dir,
            'name' => $name_photo,
            'create_at' => date("Y-m-d H:i:s")
        ]);
        return Redirect::to('show-item');
    }
}
