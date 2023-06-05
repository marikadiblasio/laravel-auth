@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    <div class="card-body">
                        <div class="bg-light">
                            <div class="container py-2">
                                <h2 class="text-center text-uppercase py-2">Il tuo portfolio</h2>
                                <div class="d-flex justify-content-between py-3 fs-4">
                                    <div>Cerca</div>
                                    {{-- <button class="btn btn-dark">Aggiungi un progetto</button> --}}
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">
                                                    Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the card's content.
                                                </p>
                                                <a href="#" class="btn btn-primary">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
