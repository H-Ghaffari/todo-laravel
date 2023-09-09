@extends('layouts.master')

@section('content')
    <div class="p-5 sm:p-8 md:grid grid-cols-12">
        <div class="col-start-2 col-span-10  lg:col-start-3 lg:col-span-8 xl:col-start-4 xl:col-span-6">
            <h1 class="text-2xl font-bold mb-6 text-center">{{ $todo->title }}</h1>

            <!--card-->
            <div class="rounded border border-gray-300 overflow-hidde">
                <h2 class="px-5 py-2.5 bg-gray-100 rounded text-gray-700">توضیحات</h2>
                <hr class="border-gray-300">
                <p class="px-5 pt-3 pb-10 leading-8 text-justify">{{ $todo->description }}
                </p>
                <hr class="border-gray-300">
                <div class="px-5 py-4 flex justify-start gap-x-2.5">
                    <a role="button" href="{{ route('todo.edit', ['todo' => $todo->id]) }}"
                        class="block border rounded-[3px] leading-none px-3 py-2 border-black text-sm hover:bg-black hover:text-white">ویرایش</a>
                    <form action="{{ route('todo.delete', ['todo' => $todo->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" role="button" href=""
                            class="block text-white border border-red-600 rounded whitespace-nowrap leading-none px-3 py-2 bg-red-600 text-sm hover:border-opacity-80 hover:bg-opacity-80 focus:ring-4 focus:ring-red-600 focus:ring-opacity-25">حذف</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
