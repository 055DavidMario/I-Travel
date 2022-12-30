<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Tiket;
use App\Models\Transportasi;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nama_destinasi= $request->nama_destinasi;
        $set = Wisata::all();
        if($nama_destinasi!=null){
            $data = Tiket::where('nama_destinasi','LIKE','%'.$nama_destinasi.'%');
        }else{
            $data = Tiket::all();
        }
        return view('backpage.tabledata',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function formwisata() {
        $data = Transportasi::all();
        return view('backpage.formwisata', ['data' => $data]);
    }
    public function uploadformwisata(Request $request) {
        $data=$request->all();
        Wisata::create($data);
        return redirect('/tabledata');
    }
    public function uploadformtiket(Request $request) {
        $data=$request->all();;
        Tiket::create($data);
        return redirect('/tabledata');
    }
    public function deletedata($id){
        Tiket::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function deleteWisata($id){
        Wisata::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function datatable(){
        $data = Tiket::all();
        $set = Wisata::all();
        return view('backpage.tabledata',['data'=>$data,'set'=>$set]);
    }
    public function formEdit($id){

        $data = Tiket::findOrFail($id);

        return view('backpage.formedit',compact('data'));
    }
    public function formeditwisata($id){

        $data = Wisata::findOrFail($id);

        return view('backpage.formeditwisata',compact('data'));
    }

   public function updateTiket(Request $request,$id){

    $tiket = Tiket::find($id);
    $tiket->nama_destinasi = $request->nama_destinasi;
    $tiket->tanggal_tiket = $request->tanggal_tiket;
    $tiket->waktu_perjalanan = $request->waktu_perjalanan;
    $tiket->transit = $request->transit;
    $tiket->makan = $request->makan;
    $tiket->save();
    return redirect('/tabledata');
   }
   public function updateWisata(Request $request,$id){

    $wisata = Wisata::find($id);
    $wisata->nama_wisata = $request->nama_wisata;
    $wisata->lokasi = $request->lokasi;
    $wisata->date = $request->date;
    $wisata->gambar= $request->gambar;
    $wisata->deskripsi = $request->deskripsi;
    $wisata->save();
    return redirect('/tabledata');
   }

}
