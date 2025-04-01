
    {{-- margin top --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>cpf</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       @foreach($clientes as $c)
                            <td>{{ $c->id }} </td>
                            <td> {{ $c->nome }}</td>
                            <td> {{ $c->cpf }}</td>
                        
                            {{-- $t é o objeto, e o  nome é  a coluna --}}
                            <td>

                                <a href="{{ route('cliente.edit', ['id' => $c->id]) }}"
                                    class="btn btn-info btn-sm">Editar</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            


        </div>
    </div>