@extends('layouts.master')

@section('content')
    <div class="container mx-auto grid grid-cols-12">
        <div class="col-span-12 sm:col-span-7 sm:col-start-2 px-8 pt-10 flex flex-col">
            <form action="{{ route('login.user', ['id' => 35]) }}" method="GET">
                {{-- {{ csrf_field() }} --}}
                {{-- @csrf --}}
                <div class="mb-5">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-grey-darker"
                        id="email" name="email" type="email" placeholder="email">
                </div>
                <div class="mb-7">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-grey-darker mb-3"
                        name="password" id="password" type="password" placeholder="******************">
                    <p class="text-red text-xs italic">Please choose a password.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
