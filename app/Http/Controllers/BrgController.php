<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Barang;

class BrgController extends Controller
{
  public function brg()
    {
      $data = DB::table('barang')->get();
      //dd($data);
      return view('barang')->with([
        'barang'=> $data
      ]);
    }
    public function barg()
      {
        $data = DB::table('barang')->get();
        //dd($data);
        return view('tampil')->with([
          'barang'=> $data
        ]);
      }

    public function insert(Request $request)
    {
      $NamaBarang = $request->NamaBarang;
      $Harga = $request->Harga;
      $Stock = $request->Stock;
      //dd($Jumlah);

      DB::table('barang')->insert(
        [
          'nama_barang'=>$NamaBarang,
          'harga_barang'=>$Harga,
          'stock'=>$Stock
        ]
      );
      return redirect()->back();
    }
    public function getAddEditRemoveColumn()
    {
        return view('edit');
    }

    public function getAddEditRemoveColumnData()
    {
      $brg = DB::select(['id', 'nama_barang', 'harga_barang', 'stock'])->get();

     return Datatables::of($brg)
         ->addColumn('action', function ($barang) {
             return '<a href="#edit-'.$barang->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
         })
         ->make(true);
 }
    public function delete($id)
    {
      //dd($id);
      DB::table('barang')
          ->where('id','=',$id)
          ->delete();
      return redirect('/barang');
    }
    public function tampil()
    {
      return view('lte');
    }
    public function getBasic()
   {
       return view('test');
   }

   public function getBasicData()
   {
       return Datatables::eloquent(Barang::query())->make(true);
   }
}
