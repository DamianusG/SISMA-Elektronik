@extends('layouts.main')
 
@section('page','Daftar Barang')
@section('content')
{{-- <div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaBarang" class="form-control-label">Nama Barang</label>
                <input type="text" name="namaBarang" value="{{ old('namaBarang') }}" class="form-control @error('namaBarang') is-invalid @enderror" />
                @error('namaBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="tipeBarang" class="form-control-label">Tipe Barang</label>
                <input type="text" name="tipeBarang" value="{{ old('tipeBarang') }}" class="form-control @error('tipeBarang') is-invalid @enderror" />
                @error('tipeBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="deskripsiBarang" class="form-control-label">Deskripsi</label>
                <textarea name="deskripsiBarang" class="ckeditor form-control @error('deskripsiBarang') is-invalid @enderror"> {{ old('deskripsiBarang') }} </textarea>               
                @error('deskripsiBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="hargaBarang" class="form-control-label">Harga Barang</label>
                <input type="number" name="hargaBarang" value="{{ old('hargaBarang') }}" class="form-control @error('hargaBarang') is-invalid @enderror" />
                @error('hargaBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="stok" class="form-control-label">Quantity</label>
                <input type="number" name="stok" value="{{ old('stok') }}" class="form-control @error('stok') is-invalid @enderror" />
                @error('stok') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>
            </div>
        </form>
    </div>
</div> --}}
@endsection