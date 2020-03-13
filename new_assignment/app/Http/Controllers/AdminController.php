<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function delete_guru($id){
        echo "<script>alert('Data Berhasil Di')</script>";
        // Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
        DB::table('users')->where('id',$id)->delete();
        try{
            return redirect()->action('HomeController@adminHome');
        }catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
