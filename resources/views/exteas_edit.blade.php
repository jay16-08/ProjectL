@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
    <h3>Edit</h3>
    @foreach ($data as $user)
    <form method="POST" action="{{ route('submiteditexteas',['id' => $user->id])}}">
    {{csrf_field()}}
   
    <input type="hidden" name="_method" value="PATCH"/>
    <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="id" value="{{$user->id}}" />
        </div>
        <label> Enter the Exteas Description </lable>
        <div>
            <input type="text" name="descriptionextras" value="{{$user->descriptionextras}}" />
        </div>
        <label> Enter the Exteas Amount </lable>
        <div>
            <input type="number" name="amountextras" value="{{$user->amountextras}}" />
        </div>
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('test')}}">Back</a>
        </div>
    

    </form>
    @endforeach
    </div>
</div>

@endsection