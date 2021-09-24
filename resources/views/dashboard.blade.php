@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    
                    
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Presenças</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Saber Mais</a>
                            </div>
                        </div>
                    </div>
                   

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                
                                    <th scope="col">Nome</th>
                                    <th scope="col">Qtd Presenças</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @foreach($p as $ps)
                            <tbody>
                                <tr>
                                <th scope="row">{{ $ps->name }}</th>                            
                                <td>{{ $ps->QTD }}</td>   
                                <td><a href="{{ route('show',$ps->name) }}" class="btn btn-sm btn-primary">Saber Mais</a></td>                          
                               
            
                                </tr>
                            </tbody>
                            @endforeach
                        
                        </table>
                    </div>
                </div>
            </div>
            
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
   
@endpush