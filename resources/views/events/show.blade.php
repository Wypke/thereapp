@extends('_layouts.app')


@section('content')

<div class="row justify-content-center">
    <div class="col-md-8" >
        <a href="/events" class="btn btn-primary">Go back</a>
        <div class="card">
            <div class="card-header">
                <h3><b>{{$event->title}}</b></h3>
            </div>

            <div class="card-body">
                {{$event->body}}
            </div>
            <small>Event Created at: {{$event->created_at}}</small>
        </div>    
    <a href="/events/{{$event->id}}/edit" class="btn btn-primary float-right">Edit</a>    
    </div>
</div>

@endsection