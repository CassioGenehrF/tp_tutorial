@extends('layout.app')

@section('scripts')
    <title>Apresentação - Temporada Paulista</title>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <h1>Apresentação Temporada Paulista</h1>
            <div class="mt-4 d-flex flex-column video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_TX-FDJeCrk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#apresentation').addClass('active');
        });
    </script>
@endsection
