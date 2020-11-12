@extends('layouts.default')

@section('content')
  <div class="card">
      <div class="card-header">
          <strong>Tambah Foto</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <select name="products_id" id="" class="form-control @error('products_id') is-invalid @enderror ">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" >{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="photo" class="form-control-label">Foto</label>
                <input type="file" 
                       name="photo" 
                       accept="image/*"
                       value="{{ old('photo') }}" 
                       class="form-control @error('photo') is-invalid @enderror"
                />
                @error('photo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Jadikan Default</label>
                <br>
                <label>
                    <input type="radio" 
                       name="is_default" 
                       value="{{ old('is_default',1) }}" 
                       class="@error('isdefault') is-invalid @enderror"
                />
                Ya
                </label>
                &nbsp;
                <label>
                    <input type="radio" 
                       name="is_default" 
                       value="{{ old('is_default',0) }}" 
                       class="@error('isdefault') is-invalid @enderror"
                />
                Tidak
                </label>
                @error('is_default')
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