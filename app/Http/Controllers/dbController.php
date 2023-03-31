<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
        $personList = DB::table('person')->get();
        return view('backend.pages.personList')->with([
            'personList' => $personList
        ]);
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
