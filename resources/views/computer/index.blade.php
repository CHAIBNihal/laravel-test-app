@extends('layout')
@section('title', 'Computer')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center  ">
        <h1> Computer All</h1>
    </div>
    <div >
        @if (count($computers)>0)
        <ul>
            @foreach ($computers as $c )

                <a href="{{ route('computer.show', ['computer' => $c['id']])}}">
                 <li>
                    {{$c['name']}} is from <strong>{{$c['origin'] }}</strong>
                    -  <strong>{{$c['price']}}$</strong>
                    </li>
                </a>


            @endforeach
        </ul>
        @else
        <p>There are no data to display</p>
         @endif
    </div>

@endsection

