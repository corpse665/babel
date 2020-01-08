<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Komentar_controller extends Controller
{
    public function index(){
    	$title = 'Managemen Komentar';
    	$data = \DB::table('komentar as k')->join('kampung as m','m.kampung_id','=','k.kampung_id')->select('m.judul','k.nama','k.email','k.isi','k.created_at','k.komentar_id')->get();

    	return view('admin.komentar.komentar_index',compact('title','data'));
    }

    public function delete($komentar_id){
    	\DB::table('komentar')->where('komentar_id',$komentar_id)->delete();

    	return redirect('admin/komentar');
    }
}
