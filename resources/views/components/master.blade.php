<x-app-layout>
    <x-header></x-header>
    <div class="main-container flex">


        @include('sidebar')
        {{ $slot }}
    </div>

    <x-scripts></x-scripts>
</x-app-layout>
