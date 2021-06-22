 @extends('layouts.main')
 
 @section('page','Daftar Pembeli')
 @section('content')
     <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                        <a href="{{ route('pembeli.create') }}"> <i class="far fa-plus-square"></i> Tambah Data Pembeli </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table-pembeli" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->idPembeli }}</td>
                            <td>{{ $item->namaPembeli }}</td>
                            <td>{{ $item->noTelp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td><a href="{{ route('pembeli.edit',$item->idPembeli) }}" class="btn bg-gradient-primary btn-sm">
                                <i class="fas fa-edit"></i></a>
                                <form action="{{ route('pembeli.destroy',$item->idPembeli) }}" method="POST" class='d-inline'>
                                @csrf
                                @method('delete')
                                <button class="btn bg-gradient-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class ="text-center p-5">Daftar Pembeli masih kosong</td></tr>
                     @endforelse
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
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 @endsection