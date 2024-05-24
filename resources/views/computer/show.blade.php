@extends('layout')
@section('title', ' Show Computer')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 ">
        <h1> Computer All</h1>
    </div>
    <div class="mt-8 justify-between ">

      <p> {{$computer['name'] }} is from <strong>{{$computer['origin'] }}</strong> -  <strong>{{$computer['price']}}$</strong></p>
      <a href="{{route('computer.edit' ,  $computer->id)}}" class="edit-btn">Edit</a>
    <form action="{{route('computer.destroy' ,  $computer->id)}}"  method="POST">
        @csrf
        @method("DELETE")
         <input type="submit"  value="delete">
    </form>

    </div>

@endsection

