<x-layout> {{-- sabe que vamos usar o template layout --}}

    <x-slot:titulo>Página inicial</x-slot:titulo>

    <p>Bem vindo.</p>{{-- tudo que nao e definido como o acima vai pra slot da layout--}}

</x-layout>