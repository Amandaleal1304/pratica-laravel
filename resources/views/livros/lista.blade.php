<x-layout>

    <x-slot:titulo>Livros</x-slot:titulo>



    @session('success'){{-- guarda na sessao uma mensagem de sucesso ou nao e ai usa em outra coisa --}}

        {{ session('success') }}

    @endsession



    @if (count($livros) > 0)

        <table>

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Autor</th>

                    <th>Ano</th>

                    <th>Descrição</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($livros as $livro)

                    <tr>

                        <td>{{ $livro->id }}</td>

                        <td>{{ $livro->autor }}</td>

                        <td>{{ $livro->ano_publicacao }}</td>

                        <td>{{ $livro->descricao }}</td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>Nenhum livro encontrado.</p>

    @endif

</x-layout>
