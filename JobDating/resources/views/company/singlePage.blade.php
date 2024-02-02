@extends('layout.nav')
@section('content')

<h1>{{ $companies->company_name }}</h1>
<p>{{ $companies->company_role }}</p>
<p>{{ $companies->address }}</p>
<p>{{ $companies->created_at}}</p>

@endsection
