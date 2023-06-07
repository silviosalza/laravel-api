@extends('layouts.admin')

@section('content')
    <h1>Progetto {{ $project->title }}</h1>
    <p>{{ $project->content }}</p>
    <h4>{{$project->type?->name}}</h4>
@endsection