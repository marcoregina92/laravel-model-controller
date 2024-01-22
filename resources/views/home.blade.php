@extends('layouts.app')

@section('content')
<h1>Film</h1>

<ul>
@foreach ($films as $film)
    <li>{{$film->title}}</li>
@endforeach
</ul>

@endsection