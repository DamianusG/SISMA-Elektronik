 @extends('layouts.main')
 
 @section('page','Daftar Barang')
 @section('content')
     <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                        <a href="{{ route('barang.create') }}"> <i class="far fa-plus-square"></i> Tambah Barang </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->idBarang }}</td>
                            <td>{{ $item->namaBarang }}</td>
                            <td>{{ $item->tipeBarang }}</td>
                            <td>{{ $item->hargaBarang }}</td>
                            <td>{{ $item->stokBarang }}</td>
                            <td><a href="{{ route('barang.edit',$item->idBarang) }}" class="btn bg-gradient-primary btn-sm">
                                <i class="fas fa-edit"></i></a>
                                <form action="{{ route('barang.destroy',$item->idBarang) }}" method="POST" class='d-inline'>
                                @csrf
                                @method('delete')
                                <button class="btn bg-gradient-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class ="text-center p-5">Daftar barang masih kosong</td></tr>
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