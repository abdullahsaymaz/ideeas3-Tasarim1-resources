@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <go-back-button go-to="/products"></go-back-button>
</div>

<div class="container mt-5">

    <div class="section-title h2 pb-2 d-flex align-items-center">
        <div class="flex-grow-1">
            <span class="st-fill">Ürün düzenle</span>
        </div>
    </div>

    <form action="/products/{{ $product->id }}" enctype="multipart/form-data" method="post">
        @csrf

        @method('PATCH')

        <div class="h5">
            <label for="name" class="col-form-label pb-0">İsim</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">

            @error('name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="h5">
            <label for="price" class="col-form-label pb-0">Fiyat</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">

            @error('price')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="h5">
            <label for="description" class="col-form-label pb-0">Açıklama</label>
            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>

            @error('description')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="h5 buttons mt-4">
            <button type="submit" form="deleteProduct" class="btn btn-danger">Sil</button>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </div>
    </form>

    <form action="/products/{{ $product->id }}" method="post" id="deleteProduct">
        @csrf
        @method('DELETE')
    </form>

</div>


@endsection
