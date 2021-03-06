<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Product;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request, Builder $htmlBuilder)
    {
        $Product = Product::all();
        $Lainnya = Lainnya::all();

     if ($request->ajax()) {
    $Product = Product::select(['id','nama_product', 'bahan','warna','ukuran','cover']);
        return Datatables::of($Product)
        ->addColumn('cover', function($Product){
            return '<img src="/img/img7/'.$Product->cover. '" height="100px" width="200px">';
        })
        ->addColumn('action', function($Product){
            return view('datatable._action', [
                'model'=> $Product,
                'form_url'=> route('Product.destroy', $Product->id),
                'edit_url'=> route('Product.edit', $Product->id),
                'confirm_message' => 'Yakin mau menghapus ' . $Product->nama_product . '?'
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
    ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Gambar'])
    ->addColumn(['data' => 'nama_product', 'name'=>'nama_product', 'title'=>'Nama Product'])
    ->addColumn(['data' => 'bahan', 'name'=>'bahan', 'title'=>'Bahan'])
    ->addColumn(['data' => 'warna', 'name'=>'warna', 'title'=>'Warna'])
    ->addColumn(['data' => 'ukuran', 'name'=>'ukuran', 'title'=>'Ukuran'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Product.index')->with(compact('Product','html','Lainnya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'cover'=> 'image|max:2048',
            'nama_product'=> 'required|unique:products,nama_product',
            ]);
        $Product = Product::create($request->except('cover'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img7';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover = $filename;
            $Product->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $Product->nama_product"
            ]);
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $Product = Product::find($id);
           $Lainnya = Lainnya::all();
        return view('Product.edit')->with(compact('Product','Lainnya'));
    
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
        $this->validate($request, ['nama_product' => 'required|unique:products,nama_product,'. $id,
            'cover'=> 'image|max:2048'
            ]);
        $poto = Product::find($id);
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
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img7';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img7'
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
        return redirect()->route('Product.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product= Product::find($id);
        if(!Product::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Product Berhasil Dihapus"
            ]);
        return redirect()->route('Product.index');
        }

}
            