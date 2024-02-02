@extends('layout.nav')
@section('content')

<h1>{{ $annoucements->title }}</h1>
<p>{{ $annoucements->content }}</p>
<p>{{ $annoucements->created_at}}</p>

@endsection
