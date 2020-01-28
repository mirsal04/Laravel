@extends('admin.index')
@section('content')

@component('card.head')
  User
@endcomponent

<section class="content">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>
          <div class="float-right">
          <a href="{{route('user.create')}}" class="btn btn-primary btn-xs">
                  <i class="fa fa-plus"></i>TAMBAH DATA</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $no => $value): ?>
              <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                @if($value->level==1)
                  Super Admin
                @elseif($value->level==2)
                  Admin
                @else
                  User
                @endif
                </td>
                <td>

                <form class=""method="post" action="{{route('user.destroy', $value->id)}}"> 
                 @csrf
                 <input type="hidden" name="_method" value="DELETE">
                  <a href="{{url ('admin/user/'.$value->id.'/edit')}}" class="btn btn-primary " title="edit">
                  <i class="fa fa-edit"></i></a>

                  <button type="submit" class="btn btn-danger btn-small js-hapus" title="hapus">
                  <i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

@endsection