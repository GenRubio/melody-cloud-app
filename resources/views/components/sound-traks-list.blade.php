@foreach ($soundList as $list)
    <li>
        <a href="{{ route('list.view', ['slug' => $list->slug]) }}"><i class="fas fa-headphones"></i> {{ $list->name }}</a>
    </li>
@endforeach
