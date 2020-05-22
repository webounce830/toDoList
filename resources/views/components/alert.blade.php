<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('message'))
        {{ $slot }}
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @elseif(session()->has('error'))
        {{ $slot }}
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif

</div>
