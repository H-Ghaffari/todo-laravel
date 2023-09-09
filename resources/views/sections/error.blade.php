@if (count($errors) > 0)
    <div class="border rounded border-red-600 bg-red-200 px-4 mb-3">
        <ul class="">
            @foreach ($errors->all() as $error)
                <li class="text-red-800 py-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
