<div style="color: grey;">
    @php
        $url = url()->current();
        $urlGetParameters = explode('/', $url);
        $urlParameters = [];
        $count = 0;
        foreach ($urlGetParameters as $key => $value) {
            if ($key > 2 && !str_contains($value, '-')) {
                $count = $count + 1;
        
                $url = '/';
                foreach ($urlGetParameters as $position => $param) {
                    if ($position > 2 && $position <= $key) {
                        $url = $url . $param . '/';
                    }
                }
                $urlParameters[$count] = [$value, $url];
            }
        }
        
    @endphp
    @foreach ($urlParameters as $key => $parameter)
        @if ($key == 1)
            @if ($key == count($urlParameters))
                {{ ucfirst($parameter[0]) }}
            @else
                <a href="{{ url($parameter[1]) }}" style="color: #2ca99d;">{{ ucfirst($parameter[0]) }} </a>
            @endif
        @else
            @if ($key == count($urlParameters))
                / {{ ucfirst($parameter[0]) }}
            @else
                <a href="{{ url($parameter[1]) }}" style="color: #2ca99d;"> / {{ ucfirst($parameter[0]) }}
                </a>
            @endif
        @endif
    @endforeach
</div>
