<h1>{{$header}}</h1>

{{--@foreach($listings as $list)--}}
{{--    <a href="/listings/{{$list['id']}}"><h3>{{$list['title']}}</h3></a>--}}
{{--    <p>{{$list['description']}}</p>--}}
{{--@endforeach--}}

@unless(count($listings) === 0)
    @foreach($listings as $list)
        <a href="/listings/{{$list['id']}}"><h3>{{$list['title']}}</h3></a>
        <p>{{$list['description']}}</p>
    @endforeach
@else
    <p>No listings found!!</p>
@endunless

