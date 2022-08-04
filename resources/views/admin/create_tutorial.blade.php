@extends('layout.admin')

@section('scripts')
    <title>Administrador - Temporada Paulista</title>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <form action="{{ route('admin.add_tutorial') }}" method="post">
                <div class="form-group col-md-4">
                    <label for="youtube_id">Youtube ID:</label>
                    <input type="text" class="form-control" id="youtube_id" name="youtube_id" required>
                </div>
                <div class="form-group col-md-4 mt-2">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <button class="btn btn-primary mt-2">Criar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#add_tutorial').addClass('active');
        });
    </script>
@endsection
