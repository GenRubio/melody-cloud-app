@foreach ($soundList as $list)
    @if (Request::is('list/' . $list->slug))
        <li class="active">
            <a href="{{ route('list.view', ['slug' => $list->slug]) }}"><i class="fas fa-headphones"></i>
                {{ $list->name }}</a>
        </li>
    @else
        <li>
            <a href="{{ route('list.view', ['slug' => $list->slug]) }}"><i class="fas fa-headphones"></i>
                {{ $list->name }}</a>
        </li>
    @endif
@endforeach
