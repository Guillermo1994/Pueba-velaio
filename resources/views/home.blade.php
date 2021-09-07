@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
                
            </div>
        </div>
        <div>
            <table id="articulos" class="table table-striped mt-4" style="width:100%">
                <thead class="bg-primary text-white">
            <tr>
                <th >Contact</th>
                <th >Deal Name</th>
                <th >Amount</th>
                <th >Owner</th>
                <th >Owner email</th>
                <th >Accion</th>    
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato )
            <tr>
                <td>{{$dato->Contact}}</td>
                <td>{{$dato->DealName}}</td>
                <td>{{$dato->Amount}}</td>
                <td>{{$dato->Owner}}</td>
                <td>{{$dato->OwnerEmail}}</td>
                
                <td><a href="{{route('editar',$dato->id)}}" class="btn btn-info">Editar</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>

            <form action="{{route('cosulta')}}" method="get">
                @csrf
                <div class="form-group">
                    <h3>Consulta por nombre</h3>
                    <label for="contac">Contacto</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="">
                </div>
                <button type="submit" class="btn btn-success">consulta</button>
            </form>
        </div>
         {{-- @foreach ($userArray as $user )
        //     <div class="col-md-6">
        //         <ul class="list-group">
        //             <li class="list-group-item active">{{$user['name']}}</li>
        //             <li class="list-group-item active">{{$user['email']}}</li>
        //         </ul>
        //     </div>
        // @endforeach --}}

    </div>
</div>
@endsection
