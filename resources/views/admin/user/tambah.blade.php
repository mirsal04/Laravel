@extends('admin.index')
@section('content')

@component('card.head')
	Tambah User
@endcomponent
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Form</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('user.store')}}" method="POST">
					@csrf
					@include('admin.user.form')
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
				</div>
				</form>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
