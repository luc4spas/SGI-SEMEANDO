@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>
                                    Insira o seu nome COMPLETO para registrar sua presença:
                                    <br>
                            </small>
                        </div>
                        <form role="form" method="POST" action="{{ route('presenca') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=""></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome Completo') }}" type="name" name="name" value="{{ old('name') }}" value="" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('REGISTRAR') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        
                    </div>
                    <div class="col-6 text-right">
                        
                           
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
