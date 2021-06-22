 @extends('layouts.main')
 
 @section('page','Daftar Pegawai')
 @section('content')
     <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                        <a href="{{ route('pegawai.create') }}"> <i class="far fa-plus-square"></i> Tambah Pegawai Baru</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table-pegawai" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>email</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->idRole }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="{{ route('pegawai.edit',$item->id) }}" class="btn bg-gradient-primary btn-sm">
                                <i class="fas fa-edit"></i></a>
                                <form action="{{ route('pegawai.destroy',$item->id) }}" method="POST" class='d-inline'>
                                @csrf
                                @method('delete')
                                <button class="btn bg-gradient-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class ="text-center p-5">Daftar Pegawai masih kosong</td></tr>
                     @endforelse
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 @endsection