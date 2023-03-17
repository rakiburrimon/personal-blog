@extends('theme::layouts.master')

@section('content')
    <h1>Hello Blog</h1>

    <p>
        This view is loaded from module: {!! config('theme.name') !!}
    </p>
@endsection
