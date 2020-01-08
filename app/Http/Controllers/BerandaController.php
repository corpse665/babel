<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{

    public function index(){
        $kampung = \DB::table('kampung as m')->join('kategori as k','k.id','=','m.kategori_id')->select('m.judul','m.isi','m.gambar','m.created_at','k.nama as kategori','m.kampung_id','k.id')->orderby('created_at','desc')->paginate(3);
        $slides = \DB::table('kampung as m')->join('kategori as k','k.id','=','m.kategori_id')->select('m.judul','m.isi','m.gambar','m.created_at','k.nama as kategori','m.kampung_id','k.id')->limit(2)->inRandomOrder()->get();

        return view('welcome',compact('kampung','slides'));
    }

    public function search(Request $request){
        $cari = $request->cari;
        $kampung = \DB::table('kampung as m')->join('kategori as k','k.id','=','m.kategori_id')->where('m.judul','like','%'.$cari.'%')->orWhere('m.isi','like','%'.$cari.'%')->select('m.judul','m.isi','m.gambar','m.created_at','k.nama as kategori','m.kampung_id','k.id')->orderby('created_at','desc')->paginate(5);

        return view('search',compact('kampung'));
    }

    public function detail($kampung_id){
    	$kampung = \DB::table('kampung as m')->join('users as u','m.user_id','=','u.id')->where('kampung_id',$kampung_id)->first();
    	$komentar = \DB::table('komentar')->where('kampung_id',$kampung_id)->get();
    	$total_komentar = \DB::table('komentar')->where('kampung_id',$kampung_id)->count();

    	return view('detail',compact('kampung','komentar','total_komentar'));
    }

    public function komentar(Request $request, $kampung_id){
    	\DB::table('komentar')->insert([
    		'kampung_id'=>$kampung_id,
    		'nama'=>$request->nama,
    		'email'=>$request->email,
    		'isi'=>$request->isi,
    		'created_at'=>date('Y-m-d H:i:s')
    	]);

    	return redirect('detail/'.$kampung_id);
    }

    public function kampung_kategori($kategori_id){
        $data = \DB::table('kampung as m')->join('kategori as k','k.id','=','m.kategori_id')->where('m.kategori_id',$kategori_id)->select('m.judul','m.isi','m.gambar','m.created_at','k.nama as kategori','m.kampung_id','k.id')->orderby('created_at','desc')->paginate(5);

        return view('kategori',compact('data'));
    }
}
