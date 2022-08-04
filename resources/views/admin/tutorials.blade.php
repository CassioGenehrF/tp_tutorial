@extends('layout.admin')

@section('scripts')
    <title>Administrador - Temporada Paulista</title>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table font-color">
                    <thead>
                        <tr>
                            <th scope="col">Youtube ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tutorials as $tutorial)
                            <tr>
                                <td>{{ $tutorial->youtube_id }}</td>
                                <td>{{ $tutorial->title }}</td>
                                <td>
                                    <a href="{{ route('admin', ['id' => $tutorial->id]) }}"
                                        class="btn btn-light">
                                        Editar</a>
                                    <form action="{{ route('admin.delete_tutorial', ['id' => $tutorial->id]) }}"
                                        method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#tutorials').addClass('active');
        });
    </script>
@endsection
