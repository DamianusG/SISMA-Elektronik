@extends('layouts.main')
 
@section('page','Daftar Barang')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('barang.update',$items->idBarang) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="namaBarang" class="form-control-label">Nama Barang</label>
                <input type="text" name="namaBarang" value="{{ old('namaBarang') ? old('namaBarang') : $items->namaBarang }}" class="form-control @error('namaBarang') is-invalid @enderror" />
                @error('namaBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="tipeBarang" class="form-control-label">Tipe Barang</label>
                <input type="text" name="tipeBarang" value="{{ old('tipeBarang') ? old('tipeBarang') : $items->tipeBarang}}" class="form-control @error('tipeBarang') is-invalid @enderror" />
                @error('tipeBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="deskripsiBarang" class="form-control-label">Deskripsi</label>
                <textarea name="deskripsiBarang" class="ckeditor form-control @error('deskripsiBarang') is-invalid @enderror"> {{ old('deskripsiBarang') ? old('deskripsiBarang') : $items->deskripsiBarang }} </textarea>               
                @error('deskripsiBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="hargaBarang" class="form-control-label">Harga Barang</label>
                <input type="number" name="hargaBarang" value="{{ old('hargaBarang') ? old('hargaBarang') : $items->hargaBarang}}" class="form-control @error('hargaBarang') is-invalid @enderror" />
                @error('hargaBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="stokBarang" class="form-control-label">Quantity</label>
                <input type="number" name="stokBarang" value="{{ old('stokBarang') ? old('stokBarang') : $items->stokBarang}}" class="form-control @error('stokBarang') is-invalid @enderror" />
                @error('stokBarang') </div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Ubah Barang</button>
            </div>
        </form>
    </div>
</div>
@endsection