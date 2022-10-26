@extends('layout')

@include('partials._hero')
@include('partials._search')
@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($listings) === 0)
        @foreach($listings as $list)
{{--            <a href="/listing/{{$list['id']}}"><h3>{{$list['title']}}</h3></a>--}}
{{--            <p>{{$list['description']}}</p>--}}
            <x-card>
                <x-listing-card :list="$list" />
            </x-card>

        @endforeach
    @else
        <p>No listings found!!</p>
    @endunless
    </div>

@endsection

