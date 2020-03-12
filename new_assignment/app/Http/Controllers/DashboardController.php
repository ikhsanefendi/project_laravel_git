<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiteRequest;
use DB;
use App\Siswa;

class DashboardController extends Controller
{
    

    public function index(){
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
        $data->gender = "-";


        // $data->foto = $request->input('gambar');
        

        $file = $request->file('foto');
        $today = date('YmdHis'); 

        // echo 'File Name: '.$file;
        // die();
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();
        $titik = strpos($nama_file,".");
        $ekstensi= substr($nama_file,$titik,5);
        $nama_file = "foto-".$request->input('nama')."-".$today.$ekstensi;
        // echo $nama_file;
        // die();
        $data->foto = $nama_file;
        // Mendapatkan Extension File
        $extension = $file->getClientOriginalExtension();
    
        // Mendapatkan Ukuran File
        $ukuran_file = $file->getSize();
     
        // Proses Upload File
        $destinationPath = 'img';
        $file->move($destinationPath,$nama_file);

        // tidak bisa running
        // echo "<script> alert('Data siswa berhasil Disimpan')</script>";
        $data->save();
        return redirect()->action('DashboardController@index');    }

    public function delete($id){
        DB::table('siswa')->where('id',$id)->delete();
        return redirect()->action('DashboardController@index');
    }
}
