@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <go-back-button go-to="/dealers"></go-back-button>
    </div>

    <div class="container mt-5">

        <div class="section-title h2 pb-2 d-flex align-items-center">
            <div class="flex-grow-1">
                <span class="st-fill">Bayi düzenle</span>
            </div>
        </div>

        <form action="/dealers/{{ $dealer->id }}" method="post">
            @csrf

            @method('PATCH')

            <div class="h5">
                <label for="name" class="col-form-label pb-0">İsim</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $dealer->name }}">

                @error('name')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="h5">
                <label for="dealer" class="col-form-label pb-0">Bayi</label>
                <input type="text" class="form-control" id="dealer" name="dealer" value="{{ $dealer->dealer }}">

                @error('dealer')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="h5 buttons mt-4">
                <button type="submit" form="deleteDealer" class="btn btn-danger">Sil</button>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </form>

        <form action="/dealers/{{ $dealer->id }}" method="post" id="deleteDealer">
            @csrf
            @method('DELETE')
        </form>

    </div>


@endsection
