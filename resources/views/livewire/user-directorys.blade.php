<div>
    @foreach ($dirs as $dir)
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed"><strong style="color: white">{{ $dir->name }}</strong></span>
        </a>
    @endforeach
</div>
