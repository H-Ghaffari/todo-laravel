@extends('layouts.master')

@section('content')
    <div class="p-5 sm:p-8 md:grid grid-cols-12">
        <div class="col-start-2 col-span-10 lg:col-start-3 lg:col-span-8  xl:col-start-4 xl:col-span-6">
            <h1 class="text-2xl font-bold mb-6 text-center">ایجاد تسک</h1>

            <!--card-->
            <div class="rounded border border-gray-300 overflow-hidde">
                <h2 class="px-5 py-2.5 bg-gray-100 rounded text-gray-700">ایجاد تسک جدید</h2>
                <hr class="border-gray-300">
                <form class="px-5 my-4" action="{{ route('todo.store') }}" method="POST">
                    @csrf
                    {{-- @include('sections.error') --}}
                    <div class="mb-4">
                        <label for="title" class="block mb-2">نام</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="@error('title') border-red-500 @enderror block w-full border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-20 focus:border-blue-400"></input>
                        @error('title')
                            <span class=" inline-block mt-2 text-red-600 text-sm"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-2">توضیحات</label>
                        <textarea rows="3" name="description" id="description"
                            class="@error('description') border-red-500 @enderror block w-full border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-20 focus:border-blue-400">{{ old('description') }}</textarea>
                        @error('description')
                            <span class=" inline-block mt-2 text-red-600 text-sm"> {{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="block bg-black text-white border rounded-[3px] leading-none px-3 py-2 border-black text-sm focus:ring-4 focus:ring-black focus:ring-opacity-20">ارسال
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
