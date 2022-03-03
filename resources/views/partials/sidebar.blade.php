<div class="d-flex flex-column p-2 bg-light" style="width: 280px;">
    <h4>Latest movies...</h4>
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach ($shareddata as $data)
            <li class="nav-item">
                <a href="/movies/{{ $data->id }}" class="nav-link link-dark" aria-current="page">
                    {{ $data->title }}
                </a>
        @endforeach
        </li>
    </ul>
</div>

