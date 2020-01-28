<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Berita;
use Alert;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->title="berita";
        
    }
    
    public function index()
    {
        
        $data = Berita::all();
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
        $data=Berita::create($model);
        if($data){
            Alert::toast('Data berhasil Disimpan','succes');
        }else{
            Alert::toast('Data Gagal Disimpan','danger');
        }
        return redirect('admin/berita');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=Berita::find($id);
        return view('admin.'.$this->title.'.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $model= $request->all();
        $model['user_id']= auth()->user()->id;
        $data=Berita::find($model['id']);
        $data->update($model);
        if($data->update($model)){
            Alert::toast('Data berhasil Di Update','succes');
        }else{
            Alert::toast('Data Gagal Di Update','danger');
        }
        return redirect('admin/berita');
    }

    public function destroy($id)
    {
        $data=Berita::find($id);
        $data->delete();
        return redirect('admin/berita');
    }
}
