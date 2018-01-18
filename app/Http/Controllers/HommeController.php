<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Home;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class HommeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index(Request $request, Builder $htmlBuilder)
    {
        $Home = Home::all();

     if ($request->ajax()) {
    $Home = Home::select(['id','textkecilhd','textbesarhd','cover','textkecilboldbd','textbesarbd','textkecilbd','textkecilboldft','textbesarft','textkecilft']);
        return Datatables::of($Home)
        ->addColumn('cover', function($Home){
            return '<img src="/img/img1/'.$Home->cover. '" height="100px" width="200px">';
        })
        ->addColumn('action', function($Home){
            return view('datatable._action2', [
                'model'=> $Home,
                'form_url'=> route('Home.destroy', $Home->id),
                'edit_url'=> route('Home.edit', $Home->id),
                'confirm_message' => 'Yakin mau menghapus  ?'
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
    ->addColumn(['data' => 'textkecilhd', 'name'=>'textkecilhd', 'title'=>'Text 1'])
    ->addColumn(['data' => 'textbesarhd', 'name'=>'textbesarhd', 'title'=>'Text 2'])
    

    ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Gambar'])
    ->addColumn(['data' => 'textkecilboldbd', 'name'=>'textkecilboldbd', 'title'=>'Text 3'])
    ->addColumn(['data' => 'textbesarbd', 'name'=>'textbesarbd', 'title'=>'Text 4'])
    ->addColumn(['data' => 'textkecilbd', 'name'=>'textkecilbd', 'title'=>'Text 5'])


    ->addColumn(['data' => 'textkecilboldft', 'name'=>'textkecilboldft', 'title'=>'Text 6'])
    ->addColumn(['data' => 'textbesarft', 'name'=>'textbesarft', 'title'=>'Text 7'])
    ->addColumn(['data' => 'textkecilft', 'name'=>'textkecilft', 'title'=>'Text 8'])


    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Home.index')->with(compact('Home','html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $Home = Home::find($id);
           $Lainnya = Lainnya::all();
        return view('Home.edit')->with(compact('Home','Lainnya'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $poto = Home::find($id);
        $poto->update($request->all());
        if ($request->hasFile('cover')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img1'
                . DIRECTORY_SEPARATOR . $poto->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }

            // ganti field cover dengan cover yang baru
            $poto->cover = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->back();
    }
}
