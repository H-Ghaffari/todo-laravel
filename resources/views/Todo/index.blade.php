@extends('layouts.master')

@section('content')
    <div class="p-5 sm:p-8 md:grid grid-cols-12">
        <div class="col-start-2 col-span-10  lg:col-start-3 lg:col-span-8 xl:col-start-4 xl:col-span-6">
            <div class="flex justify-between mb-5">
                <h1 class="text-2xl font-bold">تسک ها</h1>
                <a href="{{ route('todo.create') }}"
                    class="block border rounded leading-none px-3 py-2 border-gray-700 text-gray-700 text-sm hover:bg-black hover:text-white">ایجاد
                    تسک</a>
            </div>
            <!--card-->
            <div class="rounded border border-gray-300 overflow-hidde">
                <h2 class="px-5 py-3 bg-gray-50 rounded text-gray-700">تسک ها</h2>
                <hr class="border-gray-300">
                <!--inner card-->
                <div class="rounded border border-gray-300 mr-14 ml-4 my-4">
                    <ul>
                        @foreach ($todos as $todo)
                            <li
                                class="flex flex-col sm:flex-row items-start sm:justify-between gap-y-4 sm:gap-y-0 sm:gap-x-10 sm:items-center px-4 pt-3 pb-3">
                                <p class="truncate max-w-full text-sm sm:text-base">
                                    {{ $todo->title }}
                                </p>
                                <div class="flex items-center justify-center gap-x-2">
                                    <a href="{{ route('todo.show', ['todo' => $todo->id]) }}"
                                        class="block bg-black text-xs sm:text-sm text-white border rounded leading-none px-1.5 py-1.5 border-black focus:ring-4 focus:ring-black focus:ring-opacity-25">نمایش</a>
                                    @if ($todo->completed == 0)
                                        <a href="{{ route('todo.complete', ['todo' => $todo->id]) }}"
                                            class="block text-cyan-500 text-xs sm:text-sm border rounded-[3px] whitespace-nowrap leading-none px-1.5 py-1.5 border-cyan-500 hover:bg-cyan-500 hover:text-white focus:ring-4 focus:ring-cyan-500 focus:ring-opacity-30">انجام
                                            شد</a>
                                    @endif
                                </div>
                            </li>
                            <hr class="border-gray-300 @if ($loop->last) hidden @endif">
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="flex justify-center mt-14">{{ $todos->links() }}</div>
        </div>
    </div>
@endsection
