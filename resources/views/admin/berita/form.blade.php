<div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" value="{{isset($data->judul)? $data->judul:null}}" class="form-control" name="judul" required>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group" >
                                <label>Kategori</label>
                                <select class="form-control select2" name="kategori" style="width: 100%;">
                                @foreach(\App\Model\Categori::all() as $v)
                                  <option {{ (isset($data->kategori) ? $data->kategori : null) == $v->kategori ? 'selected="selected"' : null}} value="{{$v->kategori}}"> {{$v->kategori}} </option>
                                 @endforeach
                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea type="text" class="form-control" name="deskripsi" >
                                {{isset($data->deskripsi)? $data->deskripsi:null}}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea type="text" class="form-control" name="isi" >
                                {{isset($data->deskripsi)? $data->deskripsi:null}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>