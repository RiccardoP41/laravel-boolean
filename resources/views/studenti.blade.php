@extends('layouts.app')
@section("titolo", "Studenti")
@section("content")
    <h2>I nostri ex-studenti</h2>
    <h4>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h4>

    <div class="container">
        <div class="card-group">
            @foreach ($data as $key => $student)
                <div class="card">
                  <a href="{{ route("studenti.slug",[$student["slug"]]) }}"><img src="{{$student["img"]}}" class="card-img-top" alt="{{$student["nome"]}}"></a>
                  <div class="card-body">
                    <a href="{{ route("studenti.show",['id' => $key]) }}"><h5 class="card-title">{{$student["nome"]}}</h5></a>
                    <h6>Assunt{{ ($student["genere"] == "f") ? "a" : "o" }} da {{$student["azienda"]}}</h6>
                    <p class="card-text"><small class="text-muted">{{$student["anni"]}} anni</small></p>
                  </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
