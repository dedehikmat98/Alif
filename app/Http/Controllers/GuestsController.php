<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Product;
use App\Home;
use App\About;
use App\Store;
use App\Lainnya;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Str;


class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request, Builder $htmlBuilder)
    {
       $Home = Home::all();
       $Lainnya = Lainnya::all();
       return view('guest.home')->with(compact('Home','Lainnya'));
   }

  
  public function products(Request $request, Builder $htmlBuilder)
   {
       $Product = Product::orderBy('nama_product','asc')->get();
       $Lainnya = Lainnya::all();
       return view('guest.products')->with(compact('Product','Lainnya')); 
   }

   public function news(Request $request, Builder $htmlBuilder)
   {
       $Product = Product::orderBy('created_at','desc')->take(5)->get();
       $Lainnya = Lainnya::all();
       return view('guest.news')->with(compact('Product','Lainnya')); 
   }



public function store(Request $request, Builder $htmlBuilder)
   {
       $Store = Store::all();
       $Lainnya = Lainnya::all();
       return view('guest.store')->with(compact('Store','Lainnya')); 
   }

public function about(Request $request, Builder $htmlBuilder)
   {
       $About = About::all();
       $Lainnya = Lainnya::all();
       return view('guest.about')->with(compact('About','Lainnya')); 
   }



}
