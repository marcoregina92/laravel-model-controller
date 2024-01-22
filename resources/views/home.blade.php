@extends('layouts.app')

@section('content')
<h1>Film</h1>

<div class="container">
    <div class="row">
        <div class="d-flex flex-wrap">
            @foreach ($films as $film)
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">{{$film->title}}</h2>
                        <h5 class="card-text">Nazionalità: {{$film->nationality}}</h5>
                        <h5 class="card-text">Data di uscita: {{$film->date}}</h5>
                        <h5 class="card-text">Voto: {{$film->vote}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</ul>


@endsection