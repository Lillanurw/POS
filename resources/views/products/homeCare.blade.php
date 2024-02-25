@extends('layouts.app')
@section('content')
    <div class="min-h-screen flex flex-col">
        @component('components.navbar')
        @endcomponent
        <div class="flex-auto flex justify-center items-center">
            <h1 class="text-7xl text-center">Welcome to Lilla's Store</h1>
        </div>
    </div>
@endsection