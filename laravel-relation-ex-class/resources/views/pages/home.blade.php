@extends('layouts.main-layout')

@section('content')

    {{-- creo un ciclo foreach per stampare tutti le informazioni delle entità presenti nella tabella people --}}
    @foreach ($people as $person)

        <div class="card text-center my-3">

            {{-- nome della persona che ha pubblicato il post --}}
            <div class="card-header">
                <h2>{{ $person -> first_name}} {{ $person -> last_name}}</h2>
            </div>

            {{-- container dei post --}}
            {{-- stampo con un foreach tutti i post --}}
                <div class="card-body d-flex flex-wrap gap-3">
                    {{-- card contenente il post --}}
                    @if ($person -> posts -> count() > 0)
                        @foreach ($person -> posts as $post)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body text-start">
                                    <h5 class="card-title"><strong>Title:</strong> {{ $post -> title}}</h5>
                                    <p class="card-text"><strong>Description:</strong> {{ $post -> body ? $post -> body : "No Description"}}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>You have not published any posts!&#128532;</h2>
                    @endif
                    
                </div>

            {{-- info sulla persona che ha pubblicato i post --}}
            <div class="card-footer text-muted">
                <h6><strong>Contacts:</strong></h6>
                <span>Phone Number: {{ $person -> personDetail -> phone_number}}</span>
                <br>
                <span>Email: {{ $person -> personDetail -> email}}</span>
                <br>
                <span>Address: {{ $person -> personDetail -> address}}</span>
            </div>
        </div>

    @endforeach
@endsection