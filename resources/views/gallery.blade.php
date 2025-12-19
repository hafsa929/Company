<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>معرض الصور</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-grayCustom-100 p-6" style="font-family: 'Cairo', sans-serif;">

<h2 class="text-3xl font-bold text-center mb-10 text-primary-600">
    {{ $category }}
</h2>

@if($groups->isNotEmpty())
@foreach($groups as $group)
    <h3 class="text-2xl font-bold mb-6 mt-10 text-gray-800 text-center">
        {{ $group['name'] }}
    </h3>

    @if($group['images']->isNotEmpty())
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mb-8">
            @foreach($group['images'] as $file)
                <div class="overflow-hidden rounded-xl shadow bg-white">
                    <a href="https://wa.me/+218918618309?text={{ urlencode($file['directLink']) }}" target="_blank">
                        <img
                            src="{{ $file['directLink'] }}"
                            alt="{{ $file['name'] }}"
                            loading="lazy"
                            class="w-full h-48 object-cover hover:scale-105 transition duration-300 cursor-pointer"
                        >
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mb-6">
            لا توجد صور في هذا المجلد
        </p>
    @endif
@endforeach

@else
    <p class="text-center text-gray-500 text-lg">
        لا توجد تصنيفات أو صور
    </p>
@endif

</body>
</html>