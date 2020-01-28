<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title="user";
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = User::all();
        return view('admin.'.$this->title.'.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.'.$this->title.'.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model= $request->all();
        $model['password']= bcrypt($model['password']);
        $data=User::create($model);
        if($data){
            Alert::toast('Data berhasil Disimpan','succes');
        }else{
            Alert::toast('Data Gagal Disimpan','danger');
        }
        return redirect('admin/user');
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
        $data=User::find($id);
        return view('admin.'.$this->title.'.edit',compact('data'));
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
        $model= $request->all();
        if($model['password']==null){
            $model['password'] =  $model['old'];
        }else{
            $model['password'] = bcrypt($model['password']);
        }
        
        $data = User::find($model['id']);
        if ($data->update($model)) {
            Alert::toast('Berhasil Diupdate', 'success');
        } else {
            Alert::toast('Gagal Diupdate', 'danger');
        }
        return redirect('admin/'.$this->title);

        $model['user_id']= auth()->user()->id;
        $data=User::find($model['id']);
        $data->update($model);
        if($data->update($model)){
            Alert::toast('Data berhasil Di Update','succes');
        }else{
            Alert::toast('Data Gagal Di Update','danger');
        }
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('admin/user');
    }
}
