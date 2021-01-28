<div>
    @foreach ($dirs as $dir)
        
        <a href="{{ route('directorio', $dir->name) }}" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed"><strong style="color: red"><i class="fas fa-music"></i></strong> <strong>{{ $dir->name }}</strong></span>
        </a>
    @endforeach
</div>
