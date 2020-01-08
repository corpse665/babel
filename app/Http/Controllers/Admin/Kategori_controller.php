<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Kategori_controller extends Controller
{
    public function index(){
   		$title = 'Managemen Kategori';
   		$kategori = \DB::table('kategori as k')->join('users as u','k.user_id','=','u.id')->select('k.nama','u.name','k.created_at','k.id')->get();

   		return view('admin.kategori.kategori_index',compact('title','kategori'));
   }

   public function add(){
   		$title = 'Tambah Kategori';

   		return view('admin.kategori.kategori_add',compact('title'));
   }

   public function store(Request $request){
   		$this->validate($request,[
   			'nama'=>'required'
   		]);

   		$nama = $request->nama;

   		\DB::table('kategori')->insert([
   			'nama'=>$nama,
   			'user_id'=>\Auth::user()->id,
   			'created_at'=>date('Y-m-d H:i:s'),
   			'updated_at'=>date('Y-m-d H:i:s')
   		]);

   		return redirect ('admin/kategori');
   }
   public function edit($id){
   		$title = 'Edit Kategori';
   		$kategori =\DB::table('kategori')->where('id',$id)->first();

   		return view('admin.kategori.kategori_edit',compact('kategori','title')); 
   }
   public function update(Request $request, $id){
   		\DB::table('kategori')->where('id',$id)->update([
   			'nama'=>$request->nama,
   			'updated_at'=>date('Y-m-d H:i:s')
   		]);

   		return redirect('admin/kategori');
   }
   public function delete($id){
   		\DB::table('kategori')->where('id',$id)->delete();

   		return redirect('admin/kategori');
   }
}
