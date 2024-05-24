@extends('layout')
@section('title', 'create New Computer')
@section('content')

<div class="max-w-6xl mx-auto ">
    <div class="responsive  justify-center">
        <h1> create a new Computer </h1>
    </div>

    <div class="flex  justify-center ">
      <form action="{{route('computer.store')}}" method="post" class="form bg-white p-6 border-1">
        @csrf
        <div>
              <label for="computer-name">Computer name</label>
             <input type="text" id="computer-name" class="computer-name" value="{{old('computer-name')}}" name="computer-name">
              @error('computer-name')
              <div class="form-error">
                 {{$message}}
              </div>

             @enderror
        </div>


        <div>
             <label for="computer-origin">Computer Origin</label>
             <input type="text" id="computer-origin" class="computer-origin" value="{{old('computer-origin')}}" name="computer-origin">
             @error('computer-origin')
             <div class="form-error">
                {{$message}}
             </div>

            @enderror
        </div>


        <div>
             <label for="computer-price">Computer Price</label>
             <input type="text" id="computer-price" class="computer-price" value="{{old('computer-price')}}" name="computer-price">
             @error('computer-price')
             <div class="form-error">
                {{$message}}
             </div>

            @enderror
        </div>
        <button type="submit">submit</button>

      </form>
    </div>


@endsection
