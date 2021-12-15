@extends('simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do Médico</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Compatibilidade</th>
                </thead>

                    <tbody>
                        <th scope="row">{{$blood['id']}}</th>
                        <td>{{$blood['type']}}</td>
                        <td>{{$blood['compatibility']}}</td>

                        <td>
                            <form action="{{route('deleteBloodBank' , $blood->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listBloodBank')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
