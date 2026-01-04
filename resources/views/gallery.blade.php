<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>معرض الصور</title>
  <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6 font-sans" style="font-family: 'Cairo', sans-serif;">

<h2 class="text-3xl font-bold text-center mb-10 text-primary-600">
    {{ $category }}
</h2>

@if($groups->isNotEmpty())
    @foreach($groups as $group)
        <h3 class="text-2xl font-bold mb-6 mt-10 text-gray-800 text-center">
            {{ $group['name'] }}
        </h3>

        @if($group['images']->isNotEmpty())
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                @foreach($group['images'] as $file)
                    <div class="overflow-hidden rounded-xl shadow bg-white">
                        <img
                            src="{{ $file['directLink'] }}"
                            alt="{{ $file['name'] }}"
                            loading="lazy"
                            class="w-full h-72 object-cover cursor-pointer transition-transform duration-300 hover:scale-105"
                            onclick='openModal(
                                    "{{ $file['directLink'] }}",
                                    "{{ addslashes($group['name']) }}",
                                    @json($group["images"]->pluck("directLink"))
                                )'
                            >
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

<!-- المودال -->
<div id="myModal" class="hidden fixed inset-0 z-50 bg-black/70 flex justify-center items-center p-4 ">
    <div class="bg-white rounded-2xl w-full max-w-lg mx-auto p-6 relative flex flex-col items-center ">
        <span class="absolute top-4 right-4 text-gray-700 text-2xl font-bold cursor-pointer" onclick="closeModal()">&times;</span>
        <h3 id="modalCategory" class="text-xl font-bold text-gray-800 mb-4 text-center"></h3>
        <img id="modalImage" class="w-full max-h-[60vh] object-contain rounded-lg mb-4" src="" alt="">
        <!-- أزرار التنقل -->
        <div class="flex justify-between w-full mb-4">
            <button onclick="prevImage()" class="bg-gray-200 px-4 py-2 rounded">
                ⟵ السابق
            </button>
            <button onclick="nextImage()" class="bg-gray-200 px-4 py-2 rounded">
                التالي ⟶
            </button>
        </div>
        <textarea id="userText" rows="4" placeholder="اكتب طلبك هنا..." class="w-full p-3 border border-gray-300 rounded-lg mb-4 resize-none"></textarea>
        <button id="modalWhatsapp" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 rounded-lg" onclick="sendWhatsapp()">اضغط هنا للحجز واتساب</button>
    </div>
</div>
<script>
    let images = [];
    let currentIndex = 0;

    function openModal(imgSrc, category, imgs) {
        images = imgs;
        currentIndex = images.indexOf(imgSrc);

        document.getElementById('modalImage').src = imgSrc;
        document.getElementById('modalCategory').textContent = category;
        document.getElementById('userText').value = '';
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        document.getElementById('modalImage').src = images[currentIndex];
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        document.getElementById('modalImage').src = images[currentIndex];
    }

    function sendWhatsapp() {
        let text = document.getElementById('userText').value;
        let msg = text + "\n" + images[currentIndex];
        window.open(
            "https://wa.me/+218920495399?text=" + encodeURIComponent(msg),
            "_blank"
        );
    }

    window.onclick = function(e) {
        if (e.target.id === 'myModal') closeModal();
    }
</script>


</body>
</html>
