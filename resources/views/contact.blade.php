@extends('master')

@section('content')
    
<h1>  contact 1 </h1>

    <p> {{$name}}

    @foreach ([1,2,3,4,5,6] as $item)
        <li> {{ $item }} </li>
    @endforeach

@endsection