@extends('layouts.admin')
@section('content')


<form method="POST" action="submitcustomer" align="center">
{{ csrf_field() }}
<fieldset>
<legend>Insert Data:</legend>
    <div>
    <!-- <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="customers_id" />
        </div> -->
        <label> Enter the Exteas Description F N </lable>
        <div>
            <input type="text" name="first_name" />
        </div>
        <label> Enter the Exteas Amount L N </lable>
        <div>
            <input type="text" name="last_name" />
        </div>
        <label> Enter the Exteas id AD </lable>
        <div>
            <input type="text" name="address" />
        </div>
        <label> Enter the Exteas Description EM </lable>
        <div>
            <input type="text" name="email" />
        </div>
        <label> Enter the Exteas Amount PASS </lable>
        <div>
            <input type="text" name="passwordf" />
        </div>
        <label> Enter the Exteas Amount PASS </lable>
        <div>
            <input type="text" name="passwords" />
        </div>
        
        <label> Enter the Exteas Amount PN </lable>
        <div>
            <input type="text" name="phone_number" />
        </div>
    
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('customers')}}">Back</a>
        </div>
       
    </div>
    </fieldset>
</from>


<html>
<head>
<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>
@endsection
