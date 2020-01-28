@extends('admin.index')
@section('content')

@component('card.head')
  Berita
@endcomponent

<section class="content">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Berita</h3>
          <div class="float-right">
          <a href="{{route('kategori.create')}}" class="btn btn-primary btn-xs">
                  <i class="fa fa-plus"></i>TAMBAH DATA</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $no => $value): ?>
              <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $value->categori }}</td>
                <td>

                <form class=""method="post" action="{{route('kategori.destroy', $value->id)}}"> 
                 @csrf
                 <input type="hidden" name="_method" value="DELETE">
                  <a href="{{url ('admin/kategori/'.$value->id.'/edit')}}" class="btn btn-primary " title="edit">
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