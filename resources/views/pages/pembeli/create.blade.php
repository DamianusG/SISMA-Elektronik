 @extends('layouts.main')
 
 @section('page','Daftar pembeli')
 @section('content')
 <div class="card">
  <div class="card-header">
      <strong>Tambah Pembeli</strong>
  </div>
  <div class="card-body card-block">
      <form action="{{ route('pembeli.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="namaPembeli" class="form-control-label">Nama Pembeli</label>
              <input type="text" name="namaPembeli" value="{{ old('namaPembeli') }}" class="form-control @error('namaPembeli') is-invalid @enderror" />
              @error('namaPembeli') <div class="text-muted">{{ $message }} </div>@enderror
          </div>
          <div class="form-group">
            <label for="noTelp" class="form-control-label">Nomor Telepon</label>
            <input type="number" name="noTelp" value="{{ old('noTelp') }}" class="form-control @error('noTelp') is-invalid @enderror" />
            @error('noTelp') <div class="text-muted">{{ $message }} </div>@enderror
          </div>
          <div class="form-group">
              <label for="alamat" class="form-control-label">Alamat</label>
              <textarea name="alamat" class="ckeditor form-control @error('alamat') is-invalid @enderror"> {{ old('alamat') }} </textarea>               
              @error('alamat') <div class="text-muted">{{ $message }} </div>@enderror
          </div>
          <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Tambah Pembeli</button>
          </div>
      </form>
  </div>
</div>
 @endsection