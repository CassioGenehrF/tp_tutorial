@extends('layout.app')

@section('scripts')
    <title>Tutoriais - Temporada Paulista</title>
    <link rel="stylesheet" href="{{ asset('css/tutorials.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <h1>Tutoriais</h1>
            <div class="row col-md-12 justify-content-center">
                @foreach ($tutorials as $tutorial)
                    <a href="{{ route('tutorial', ['id' => $tutorial->id]) }}" class="card-video col-md-5">
                        <img src="https://img.youtube.com/vi/{{ $tutorial->youtube_id }}/0.jpg" alt="thumbnail">
                        <div class="title">
                            <h4><b>{{ $tutorial->title }}</b></h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#tutorials').addClass('active');
        });
    </script>
@endsection
