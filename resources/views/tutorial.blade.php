@extends('layout.app')

@section('scripts')
    <title>{{ $tutorial->title }} - Temporada Paulista</title>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <h1>{{ $tutorial->title }}</h1>
            <div class="mt-4 d-flex flex-column video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $tutorial->youtube_id }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#tutorials').addClass('active');
        });
    </script>
@endsection
