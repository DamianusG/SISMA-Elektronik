@extends('layouts.main')
 
@section('page','Daftar Pegawai')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Transaksi Baru</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idPembeli" class="form-control-label">Nama Pembeli</label>
                <input type="number" name="idPembeli" value="{{ old('idPembeli') }}" class="form-control @error('idPembeli') is-invalid @enderror" />
                @error('idPembeli') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="user_id" class="form-control-label">Pegawai yang Melayani</label>
                <input type="number" name="user_id" value="{{ old('user_id') }}" class="form-control @error('user_id') is-invalid @enderror" />
                @error('user_id') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="statusTransaksi" class="form-control-label">Status Transaksi</label>
                <input type="text" name="statusTransaksi" value="{{ old('statusTransaksi') }}" class="form-control @error('statusTransaksi') is-invalid @enderror" />
                @error('statusTransaksi') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="totalTransaksi" class="form-control-label">Total Transaksi</label>
                <input type="totalTransaksi" name="totalTransaksi" value="{{ old('totalTransaksi') }}" class="form-control @error('totalTransaksi') is-invalid @enderror" />
                @error('totalTransaksi') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Tambah Transaksi</button>
            </div>
        </form>
    </div>
</div>
@endsection