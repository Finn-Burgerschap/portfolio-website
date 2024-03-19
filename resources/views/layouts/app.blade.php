@extends('layouts.base')

@section('body')
    <header class="fixed top-0 left-0 w-screen bg-white h-[5rem] shadow-sm z-50">
        <div class="max-w-[1024px] w-full h-full mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-black text-xl font-semibold">{{ __('Finn Groenewoud') }}</a>
            <div class="flex gap-[2rem]">
                <a href="{{ route('home') }}" class="text-base text-black font-normal hover:underline">{{ __('Home') }}</a>
                <a href="{{ route('home') . '#portfolio' }}" class="text-base text-black font-normal hover:underline">{{ __('Portfolio') }}</a>
                <a href="{{ route('home') . '#burgerschap' }}" class="text-base text-black font-normal hover:underline">{{ __('Burgerschap') }}</a>
                <a href="{{ route('home') . '#contact' }}" class="text-base text-black font-normal hover:underline">{{ __('Contact') }}</a>
            </div>
        </div>
    </header>

    <main class="pt-[5rem]">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </main>
@endsection
