@extends('layouts.main')
 
@section('page','Daftar Pegawai')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Pegawai</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Pegawai</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" />
                @error('name') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="idRole" class="form-control-label">Jabatan</label>
                <select name="idRole" class="form-control @error('idRole') is-invalid @enderror">
                    <option value=""> - Pilih - </option>
                    @foreach ($jabatan as $item)
                    <option value="{{ $item->idRole }}" {{ old('idRole') == $item ? 'selected' : null }} > {{ $item->namaRole }} </option>
                    @endforeach
                </select>
                @error('idRole') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                @error('email') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-control-label">Password</label>
                <input type="Password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" />
                @error('password') <div class="text-muted">{{ $message }} </div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Tambah Pegawai</button>
            </div>
        </form>
    </div>
</div>
@endsection