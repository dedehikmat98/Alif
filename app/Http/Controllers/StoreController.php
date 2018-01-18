<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Store;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index(Request $request, Builder $htmlBuilder)
    {
        $Store = Store::all();

     if ($request->ajax()) {
    $Store = Store::select(['id','textkecilatas','textbesaratas','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu','cover','textkecilbold','textbesar','textkecil']);
        return Datatables::of($Store)
        ->addColumn('cover', function($Store){
            return '<img src="/img/img1/'.$Store->cover. '" height="100px" width="200px">';
        })
        ->addColumn('action', function($Store){
            return view('datatable._action2', [
                'model'=> $Store,
                'form_url'=> route('Store.destroy', $Store->id),
                'edit_url'=> route('Store.edit', $Store->id),
                'confirm_message' => 'Yakin mau menghapus ' . $Store->nama_Store . '?'
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
    ->addColumn(['data' => 'textkecil', 'name'=>'textkecil', 'title'=>'Text Kecil'])
    ->addColumn(['data' => 'textbesar', 'name'=>'textbesar', 'title'=>'Text Besar'])
    

    ->addColumn(['data' => 'Senin', 'name'=>'Senin', 'title'=>'H1'])
    ->addColumn(['data' => 'Selasa', 'name'=>'Selasa', 'title'=>'H2'])
    ->addColumn(['data' => 'Rabu', 'name'=>'Rabu', 'title'=>'H3'])
    ->addColumn(['data' => 'Kamis', 'name'=>'Kamis', 'title'=>'H4'])
    ->addColumn(['data' => 'Jumat', 'name'=>'Jumat', 'title'=>'H5'])
    ->addColumn(['data' => 'Sabtu', 'name'=>'Sabtu', 'title'=>'H6'])
    ->addColumn(['data' => 'Minggu', 'name'=>'Minggu', 'title'=>'H7'])
 
    
    ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Gambar'])
    ->addColumn(['data' => 'textkecilbold', 'name'=>'textkecilbold', 'title'=>'Text 1'])
    ->addColumn(['data' => 'textbesar', 'name'=>'textbesar', 'title'=>'Text 2'])
    ->addColumn(['data' => 'textkecil', 'name'=>'textkecil', 'title'=>'Text 3'])




    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Store.index')->with(compact('Store','html'));
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
           $Store = Store::find($id);
           $Lainnya = Lainnya::all();
        return view('Store.edit')->with(compact('Store','Lainnya'));
    
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
        $poto = Store::find($id);
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
