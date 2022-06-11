@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <go-back-button></go-back-button>
    </div>

    <div class="section container mt-5">
        <div class="section-title h2 pb-2 d-flex align-items-center mb-0">
            <div class="flex-grow-1">
                <span class="st-fill">Bayiler</span>
            </div>
            <button class="default-font-color add-btn bg-transparent p-2 h-100 d-block flex-shrink-0" data-bs-toggle="modal" data-bs-target="#createDealerModal" style="font-size: 15px;width: 100px;">Oluştur</button>

            <!-- Modal -->
            <div class="modal fade" id="createDealerModal" tabindex="-1" aria-labelledby="createDealerModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-color-black" id="exampleModalLabel">Ürün oluştur</h5>
                            <button type="button" class="btn-close h4" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/dealers" method="post" id="newDealer">
                            @csrf
                            <div class="modal-body font-color-black">

                                <div class="mb-2 h5">
                                    <label for="name" class="col-form-label pb-0">İsim</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2 h5">
                                    <label for="dealer" class="col-form-label pb-0">Bayi</label>
                                    <input id="dealer" type="text" class="form-control @error('dealer') is-invalid @enderror" name="dealer" value="{{ old('dealer') }}" required>

                                    @error('dealer')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                            <button type="submit" form="newDealer" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content row py-2 m-0 pt-0">

            @if($dealers->count() == 0)
                <div class="h5 pt-2">Herhangi bir kayıtlı bayi yok.</div>
            @else
                <table class="table table-striped table-borderless">
                    <tbody>
                        @foreach($dealers as $dealer)
                            <tr>
                                <td>
                                    <a href="/dealers/{{ $dealer->id }}" class="default-font-color text-decoration-none">
                                        {{ $dealer->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="/dealers/{{ $dealer->id }}" class="default-font-color text-decoration-none">
                                        {{ $dealer->dealer }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection
