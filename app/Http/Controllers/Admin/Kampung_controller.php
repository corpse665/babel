<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Kampung_controller extends Controller
{
     public function index(){
    	$title ='List Kampung';
    	$data = \DB::table('kampung as m')->join('users as u','u.id','=','m.user_id')->join('kategori as k','k.id','=','m.kategori_id')->select('m.judul','m.created_at','u.name','k.nama as kategori','m.kampung_id')->where('m.user_id',\Auth::user()->id)->get();

    	return view('admin.kampung.kampung_index',compact('title','data'));

    }
    public function add(){
    	$title ='Tambah Kampung';
    	$kategori = \DB::table('kategori')->orderBy('nama','asc')->get();

    	return view('admin.kampung.kampung_add',compact('title','kategori'));
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'judul'=>'required',
    		'isi'=>'required',
    		'alamat'=>'required',
    		'fasilitas_umum'=>'required',
    		'fasilitas_wisata'=>'required',
    		'kategori_id'=>'required'
    	]);

    	$file =$request->file('image');

    	$data = array();

    	if($file){
    		$destinationPath ='uploads';
    		$file->move($destinationPath,$file->getClientOriginalName());

    		$data['kategori_id'] = $request->kategori_id;
    		$data['judul'] = $request->judul;
    		$data['isi'] = $request->isi;
    		$data['alamat'] = $request->alamat;
    		$data['fasilitas_umum'] = $request->fasilitas_umum;
    		$data['fasilitas_wisata'] = $request->fasilitas_wisata;
    		$data['user_id'] = \Auth::user()->id;
    		$data['created_at'] = date('Y-m-d H:i:s');
    		$data['updated_at'] = date('Y-m-d H:i:s');
    		$data['gambar'] = $file->getClientOriginalName();
    	}else{
    		$data['kategori_id'] = $request->kategori_id;
    		$data['judul'] = $request->judul;
    		$data['isi'] = $request->isi;
    		$data['alamat'] = $request->alamat;
    		$data['fasilitas_umum'] = $request->fasilitas_umum;
    		$data['fasilitas_wisata'] = $request->fasilitas_wisata;
    		$data['user_id'] = \Auth::user()->id;
    		$data['created_at'] = date('Y-m-d H:i:s');
    		$data['updated_at'] = date('Y-m-d H:i:s');
    	}

    	\DB::table('kampung')->insert($data);

    	\Session::flash('sukses','Data berhasil di input');

    	return redirect('admin/kampung');
    }

    public function edit($id){
    	$title = 'Edit Kampung';
    	$d = \DB::table('kampung')->where('kampung_id',$id)->first();
    	$kategori = \DB::table('kategori')->orderBy('nama','asc')->get();

    	return view('admin.kampung.kampung_edit',compact('d','title','kategori'));
    }

    public function update(Request $request,$id){
    	$this->validate($request,[
    		'judul'=>'required',
    		'isi'=>'required',
    		'alamat'=>'required',
    		'fasilitas_umum'=>'required',
    		'fasilitas_wisata'=>'required',
    		'kategori_id'=>'required'
    	]);

    	$file =$request->file('image');

    	$data = array();

    	if($file){
    		$destinationPath ='uploads';
    		$file->move($destinationPath,$file->getClientOriginalName());

    		$data['kategori_id'] = $request->kategori_id;
    		$data['judul'] = $request->judul;
    		$data['isi'] = $request->isi;
    		$data['alamat'] = $request->alamat;
    		$data['fasilitas_umum'] = $request->fasilitas_umum;
    		$data['fasilitas_wisata'] = $request->fasilitas_wisata;
    		$data['user_id'] = \Auth::user()->id;
    		$data['updated_at'] = date('Y-m-d H:i:s');
    		$data['gambar'] = $file->getClientOriginalName();
    	}else{
    		$data['kategori_id'] = $request->kategori_id;
    		$data['judul'] = $request->judul;
    		$data['isi'] = $request->isi;
    		$data['alamat'] = $request->alamat;
    		$data['fasilitas_umum'] = $request->fasilitas_umum;
    		$data['fasilitas_wisata'] = $request->fasilitas_wisata;
    		$data['user_id'] = \Auth::user()->id;
    		$data['updated_at'] = date('Y-m-d H:i:s');
    	}

    	\DB::table('kampung')->where('kampung_id',$id)->update($data);

    	\Session::flash('sukses','Data berhasil di update');

    	return redirect('admin/kampung');
    }

    public function delete($id){
    	\DB::table('kampung')->where('kampung_id',$id)->delete();
    	
    	\Session::flash('sukses','Data berhasil dihapus');
    	return redirect('admin/kampung');

    }
}
