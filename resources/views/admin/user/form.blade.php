<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{isset($data->name) ? $data->name : null}}" class="form-control" name="name" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="{{isset($data->email) ? $data->email : null}}" name="email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Password</label>
                <input name="old" value="{{isset($data->password) ? $data->password : null}}" type="hidden" class="form-control">
                <input name="password" type="password" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>level</label>
            <select class="form-control select2" name="level" style="width: 100%;">
            <option value="1"{{ (isset($data->level) ? $data->level:null)==1?'selected="selected"':null}} >Super admin</option>
            <option value="2" {{(isset($data->level) ? $data->level:null)==2?'selected="selected"':null}}>Admin</option>
            <option value="3" {{(isset($data->level) ? $data->level:null)==3?'selected="selected"':null}}>User</option>
            </select>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>