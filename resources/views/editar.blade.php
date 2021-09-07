@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Editar</h2>
    <form action="{{route('modificar',$datos->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" class="form-control" id="contac" name="contact" value="{{$datos->Contact}}">
        </div>
        <div class="form-group">
            <label for="">Deal Name</label>
            <input type="text" class="form-control" id="dealName" name="dealName" value="{{$datos->DealName}}">
        </div>
        <div class="form-group">
            <label for="">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" value="{{$datos->Amount}}">
        </div>
        <div class="form-group">
            <label for="">Owner</label>
            <input type="text" class="form-control" id="owner" name="owner" value="{{$datos->Owner}}">
        </div>
        <div class="form-group">
            <label for="">Owner email</label>
            <input type="text" class="form-control" id="ownerEmail" name="ownerEmail" value="{{$datos->OwnerEmail}}">
        </div>
        <button type="submit" class="btn btn-success">editar</button>
    </form>
</div>

@endsection