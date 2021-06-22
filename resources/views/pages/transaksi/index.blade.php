 @extends('layouts.main')
 
 @section('page','Daftar Transaksi')
 @section('content')
     <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                        <a href="{{ route('transaksi.create') }}"> <i class="far fa-plus-square"></i> Tambah Transaksi </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table-transaksi" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pembeli</th>
                        <th>Pegawai yang Melayani</th>
                        <th>Status Transaksi</th>
                        <th>Total</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->idTransaksi }}</td>
                            <td>{{ $item->idPembeli }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->statusTransaksi }}</td>
                            <td>{{ $item->totalTransaksi }}</td>
                            <td><a href="{{ route('transaksi.edit',$item->idTransaksi) }}" class="btn bg-gradient-primary btn-sm">
                                <i class="fas fa-edit"></i></a>
                                <form action="{{ route('transaksi.destroy',$item->idTransaksi) }}" method="POST" class='d-inline'>
                                @csrf
                                @method('delete')
                                <button class="btn bg-gradient-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class ="text-center p-5">Belum pernah ada transaksi di buat</td></tr>
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