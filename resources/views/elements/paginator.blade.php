<ul style="text-align : center;  margin-top : 30px;" >
    @foreach ($paginator->appends(request()->query())->linkCollection() as $link)
    <li style="display:inline; margin: 50rem 0.2rem;  ">
        @if ($link['active'])
        <span style="font-weight: bold; color:blue;">{!! $link['label'] !!}</span>
        @else
        <a href="{{ $link['url'] }}" style="color:black;">{!! $link['label'] !!}</a>
        @endif
    </li>
    @endforeach
</ul>
