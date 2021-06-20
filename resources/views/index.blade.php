@extends('layout.main')

@section('title','Dashboard')
    
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profile</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-pencil-square-o"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            Isi Profile
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
