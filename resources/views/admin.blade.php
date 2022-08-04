@extends('layout.admin')

@section('scripts')
    <title>Administrador - Temporada Paulista</title>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <h1>{{ $tutorial->title }}</h1>
            <div class="mt-4 align-center d-flex flex-column align-items-center video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $tutorial->youtube_id }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#add_tutorial').addClass('active');
        });
    </script>
@endsection
