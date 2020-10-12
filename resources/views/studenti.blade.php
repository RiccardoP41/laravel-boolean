@extends('layouts.app')
@section("titolo", "Studenti")
@section("content")
    <h2>I nostri ex-studenti</h2>
    <h4>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h4>

    <div class="container">
        <div class="card-group">
            @foreach ($data as $student)
                <div class="card">
                  <img src="{{$student["img"]}}" class="card-img-top" alt="{{$student["nome"]}}">
                  <div class="card-body">
                    <h5 class="card-title">{{$student["nome"]}}</h5>
                    <p class="card-text">{{$student["descrizione"]}}</p>
                    <p class="card-text"><small class="text-muted">{{$student["anni"]}} anni</small></p>
                  </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
