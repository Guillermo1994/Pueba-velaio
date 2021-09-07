@extends('layouts.app')
@section('content')
<div class="container">
<table id="articulos" class="table table-striped mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
        <th >Contact</th>
        <th >Deal Name</th>
        <th >Amount</th>
        <th >Owner</th>
        <th >Owner email</th>
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
        </tr>
    @endforeach
</tbody>
</table>
<hr>
<p> Yo soy {{$dato->Contact}} y mi direccion de correo es {{$dato->OwnerEmail}}</p>
</div>
@endsection