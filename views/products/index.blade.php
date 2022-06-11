@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <go-back-button></go-back-button>
    </div>

    <div class="section container mt-5">
        <div class="section-title h2 pb-2 d-flex align-items-center">
            <div class="flex-grow-1">
                <span class="st-fill">Ürünler</span>
            </div>
            <button class="default-font-color add-btn bg-transparent p-2 h-100 d-block flex-shrink-0" data-bs-toggle="modal" data-bs-target="#createProductModal" style="font-size: 15px;width: 100px;">Oluştur</button>

            <!-- Modal -->
            <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-color-black" id="exampleModalLabel">Ürün oluştur</h5>
                            <button type="button" class="btn-close h4" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/products" method="post" enctype="multipart/form-data" id="newProduct">
                            @csrf
                            <div class="modal-body font-color-black">

                                <div class="mb-2 h5">
                                    <label for="p-name" class="col-form-label pb-0">İsim</label>
                                    <input id="p-name" type="text" class="form-control @error('p-name') is-invalid @enderror" name="p-name" value="{{ old('p-name') }}" required>

                                    @error('p-name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2 h5">
                                    <label for="p-price" class="col-form-label pb-0">Fiyat</label>
                                    <input id="p-price" type="number" class="form-control @error('p-price') is-invalid @enderror" name="p-price" value="{{ old('p-price') }}" required>

                                    @error('p-price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2 h5">
                                    <label for="p-description" class="col-form-label pb-0">Açıklama</label>
                                    <textarea id="p-description" type="p-description" class="form-control @error('p-description') is-invalid @enderror" name="p-description" value="{{ old('p-description') }}" required></textarea>

                                    @error('p-description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="h5">
                                    <label for="p-image" class="col-form-label pb-0">Fotoğraf</label>
                                    <input type="file" class="form-control" id="p-image" name="p-image" accept="image/*">

                                    @error('p-image')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>


                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                            <button type="submit" form="newProduct" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content row py-2 m-0">

            @if($products->count() == 0)
                <div class="h5 p-0">Herhangi bir ürün yok.</div>
            @else
                @foreach($products as $product)
                    <div class="card p-0" style="width: 18rem;">
                        <img src="/storage/{{ $product->image }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title font-color-black">{{ $product->name }}</h5>
                            <p class="card-text font-color-black">{{ $product->description }}</p>
                            <a class="btn btn-primary" href="/products/{{ $product->id }}">İncele</a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

@endsection
