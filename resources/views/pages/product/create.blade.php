@extends('layouts.default')

@section('content')
  <div class="card">
      <div class="card-header">
          <strong>Tambah</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       class="form-control @error('name') is-invalid @enderror"
                />
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type" class="form-control-label">Type</label>
                <input type="text" 
                       name="type" 
                       value="{{ old('type') }}" 
                       class="form-control @error('type') is-invalid @enderror"
                />
                @error('type')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi" class="form-control-label">Deskripsi</label>
                <textarea name="describtion"
                          class="form-control @error('describtion') is-invalid @enderror ckeditor">
                    {{ old('describtion') }}          
                </textarea>
                @error('describtion')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Harga</label>
                <input type="number" 
                       name="price" 
                       value="{{ old('price') }}" 
                       class="form-control @error('price') is-invalid @enderror"
                />
                @error('price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="qty" class="form-control-label">Jumlah</label>
                <input type="number" 
                       name="qty" 
                       value="{{ old('qty') }}" 
                       class="form-control @error('qty') is-invalid @enderror"
                />
                @error('qty')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Barang
                </button>
            </div>
        </form>
      </div>
  </div>
@endsection