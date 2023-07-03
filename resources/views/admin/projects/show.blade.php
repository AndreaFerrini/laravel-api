@extends("layouts.dashboard")

@section("title")
    Laravel Auth | Project Show
@endsection

@section("content")

<div class="container">
    <h2>Singolo Progetto: {{ $project->title }}</h2>

    <div class="mt-4">
         <h3>{{ $project->content }}</h3>
         <img class="img-fluid text-center mt-3 mb-3" src="{{ asset('storage/' . $project->cover_image)}}" alt="">

         @if( $project->type )
            <div class="text-center mt-3 mb-3"> Type: {{$project->type->name}}</div>
         @endif

         @if( $project->technologies )
            @foreach ( $project->technologies as $element )
            <div class="text-center mt-3 mb-1"> Tecnology: {{ $element->name }} </div>
            @endforeach
         @endif

    </div>

 </div>



@endsection