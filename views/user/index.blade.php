@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <go-back-button></go-back-button>
    </div>

    <div class="section container mt-5">
        <div class="section-title h2 pb-2 d-flex align-items-center mb-2">
            <div class="flex-grow-1">
                <span class="st-fill">Kullanıcı</span>
            </div>
        </div>

        <form action="/user/{{ $user->id }}" method="post">
            @csrf

            @method('PATCH')

            <div class="h5">
                <label for="name" class="col-form-label pb-0">İsim</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">

                @error('name')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="h5">
                <label for="email" class="col-form-label pb-0">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">

                @error('email')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="h5">
                <label class="col-form-label pb-0">Oluşturuldu</label>
                <input type="text" class="form-control" value="{{ $user->created_at }}" disabled>
            </div>

            <div class="h5">
                <label for="updatedAt" class="col-form-label pb-0">Düzenlendi</label>
                <input type="text" class="form-control" value="{{ $user->updated_at }}" disabled>
            </div>

            <div class="h5 buttons mt-4">
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </form>

    </div>

@endsection
