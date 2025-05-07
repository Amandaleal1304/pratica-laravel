<x-layout>

    <x-slot:titulo>Novo livro</x-slot:titulo>

    <form method="POST" action="/livros/criar">

        @csrf{{-- evite que outros formularios enviem dados (token) --}}


        <div>


            <label for="titulo">Título:</label><br>


            <input type="text" id="titulo" name="titulo" required>


        </div>


        <div>

            <label for="autor">Autor:</label><br>

            <input type="text" id="autor" name="autor" required>

        </div>

        <div>

            <label for="ano_publicacao">Ano de publicação:</label><br>

            <input type="number" id="ano_publicacao" name="ano_publicacao" required>

        </div>

        <div>

            <label for="descricao">Descrição:</label><br>

            <textarea id="descricao" name="descricao" required></textarea>

        </div>

        <button type="submit">Criar</button>

</x-layout>
