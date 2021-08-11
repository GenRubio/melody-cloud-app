@foreach ($soundList as $list)
    <li>
        <a href=""><i class="fas fa-headphones"></i> {{ $list->name }}</a>
    </li>
@endforeach
