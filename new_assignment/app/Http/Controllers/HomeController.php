<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiteRequest;
use DB;
use App\Siswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa= DB::table('siswa')->get();
        return view('admin/index',['siswa'=>$siswa]);
    }

    public function form_add(){
        return view('admin/add');
    }   

    public function save(SiteRequest $request){

        $data = new Siswa();
        $data->nama = $request->input('nama');
        $data->email = $request->input('email');
        $data->ttl = $request->input('ttl');
        $data->no_telp = $request->input('no');
        $data->gender = $request->input('gender');
        $file = $request->file('foto');
        $today = date('YmdHis'); 
        $nama_file = $file->getClientOriginalName();
        $titik = strpos($nama_file,".");
        $ekstensi= substr($nama_file,$titik,5);
        $nama_file = "foto-".$request->input('nama')."-".$today.$ekstensi;
        $data->foto = $nama_file;
        $extension = $file->getClientOriginalExtension();
        $ukuran_file = $file->getSize();
        $destinationPath = 'img';
        $file->move($destinationPath,$nama_file);
        $data->save();
        return redirect()->action('HomeController@index');
    }

    public function form_edit($id){
        $data = DB::table('siswa')->where('id',$id)->get();
        // print_r($data);
        // die();
        return view('admin/edit',['data'=>$data]);
    }
    
    public function edit(SiteRequest $request, $id){
        // $data = new Siswa();
        $data = Siswa::find($id);
        $data->nama = $request->input('nama');
        $data->email = $request->input('email');
        $data->ttl = $request->input('ttl');
        $data->no_telp = $request->input('no');
        $data->gender = $request->input('gender');
        $file = $request->file('foto');
        $today = date('YmdHis'); 
        $nama_file = $file->getClientOriginalName();
        $titik = strpos($nama_file,".");
        $ekstensi= substr($nama_file,$titik,5);
        $nama_file = "foto-".$request->input('nama')."-".$today.$ekstensi;
        $data->foto = $nama_file;
        $extension = $file->getClientOriginalExtension();
        $ukuran_file = $file->getSize();
        $destinationPath = 'img';
        $file->move($destinationPath,$nama_file);
        $data->save();
        return redirect()->action('HomeController@index');
    }
    public function delete($id){
        DB::table('siswa')->where('id',$id)->delete();
        return redirect()->action('HomeController@index');
    }
}
