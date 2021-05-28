@extends('../admin.master')
@section('title','Banner');

@section('content')
<h1>
    <label for="ID">ID</label>
    {{$data->id}}
</h1>

<h1>
    <label for="title"></label>
    {{$data->title}}
</h1>

<h1>
    <label for="Title(Heading)">Title(Heading)</label>
    {{$data->titleheading}}
</h1>

<h1>
    <label for="Title(Bold Heading)">Title(Bold Heading)</label>
    {{$data->boldtitleheading}}
</h1>

<h1><label for="url">URL</label>
{{$data->url}}</h1>
 
<h1>
    <label for="image">IMAGE</label>
    {{$data->image}}
</h1>

@endsection