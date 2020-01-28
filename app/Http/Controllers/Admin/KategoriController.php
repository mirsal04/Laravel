<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categori;
use Alert;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->title="kategori";
        
    }
    
    public function index()
    {
        $data = Categori::all();
        return view('admin.'.$this->title.'.index',compact('data'));
    }

    public function create()
    {
        return view('admin.'.$this->title.'.tambah');
    }

    
    public function store(Request $request)
    {
        $model= $request->all();
        $model['user_id']= auth()->user()->id;
        $data=Categori::create($model);
        if($data){
            Alert::toast('Data berhasil Disimpan','succes');
        }else{
            Alert::toast('Data Gagal Disimpan','danger');
        }
        return redirect('admin/kategori');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=Categori::find($id);
        return view('admin.'.$this->title.'.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $model= $request->all();
        $model['user_id']= auth()->user()->id;
        $data=Categori::find($model['id']);
        $data->update($model);
        if($data->update($model)){
            Alert::toast('Data berhasil Di Update','succes');
        }else{
            Alert::toast('Data Gagal Di Update','danger');
        }
        return redirect('admin/kategori');
    }

    
    public function destroy($id)
    {
        $data=Categori::find($id);
        $data->delete();
        return redirect('admin/kategori');
    }
}
