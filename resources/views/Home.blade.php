<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hq_Gifts</title>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="bg-grayCustom-100 font-sans">

  <!-- Header -->
  <header class="bg-white rounded-full p-4 m-2 flex justify-between items-center shadow-lg relative">
    <!-- Logo + Title -->
    <div class="flex items-center">
      <img src="/image/hq.png" alt="Logo" class="w-10 h-10 rounded-full">
      <h1 class="text-lg font-bold text-primary-500 ml-2">Hq_Gifts</h1>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-2 space-x-reverse font-sans text-s">
      <a href="#about" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">من نحن</a>
      <a href="#services" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">خدماتنا</a>
      <a href="#vision" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">رؤيتنا</a>
      <a href="#team" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">فريق العمل</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="md:hidden text-grayCustom-700 p-2 rounded hover:bg-grayCustom-100 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden absolute top-full left-0 w-full bg-white rounded-xl shadow-lg p-4 z-50 flex flex-col gap-2 mt-2">
      <a href="#about" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">من نحن</a>
      <a href="#services" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">خدماتنا</a>
      <a href="#vision" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">رؤيتنا</a>
      <a href="#team" class="text-grayCustom-700 border border-transparent rounded-full px-3 py-1 transition-all duration-200 transform hover:scale-105 hover:bg-blue-400 hover:text-white">فريق العمل</a>
    </div>
  </header>
<div class="relative rounded-3xl m-2 bg-center bg-no-repeat bg-cover py-32 md:py-40 px-5"
     style="background-image: url('/image/m4.jpg');">

  <!-- طبقة لون الأثل بشفافية -->
  <div class="absolute inset-0 bg-grayCustom-700/40 rounded-3xl"></div>

  <section id="about" class="relative max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <div>
      <h3 class="text-3xl md:text-4xl font-bold text-primary-600 mb-4">لمحة عن متجرنا</h3>
      <p class="text-grayCustom-700 font-bold leading-relaxed text-base md:text-lg">
        متجرنا يجمع بين الطباعة المخصصة على كل المنتجات، وتنسيق الورد وتغليف البوكسات بأسلوب يعكس شخصيتك. نخلق لك تصميمك الخاص… ونحوّله لهدية جاهزة، مميزة، وتشبّهك.
      </p>
    </div>

    <!-- Blob Container -->
    <div class="blob w-full max-w-xs md:max-w-md aspect-square overflow-hidden relative mx-auto">
      <!-- Images -->
      <img src="/image/hq.jpg" class="absolute inset-0 w-full h-full object-cover animate-fade delay-0 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
      <img src="/image/hq_1.jpg" class="absolute inset-0 w-full h-full object-cover animate-fade delay-3000 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
      <img src="/image/hq.jpg" class="absolute inset-0 w-full h-full object-cover animate-fade delay-6000 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
    </div>
  </section>
</div>
<section id="services" class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h3 class="text-3xl font-bold text-primary-600 text-center mb-12">
      خدماتنا
    </h3>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1: مستلزمات تخرج -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/tp4.jpg" alt="مستلزمات تخرج" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=graduation" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                مستلزمات تخرج
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                شالات تخرج، بورد، كاتروات.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 2: كل ما يخص طباعه -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/tp1.jpg" alt="كل ما يخص طباعه" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=printing" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                كل ما يخص طباعه
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                مقات، ترامس، توت باق، استيكرات، كفرات.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 3: تغليف -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/m8.jpg" alt="تغليف" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=packaging" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                تغليف
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                تغليف أنيق يبرز جمال الهدية ويجعلها مميزة.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 4: تنسيق ورد -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/tp6.jpg" alt="تنسيق ورد" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=flowers" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                تنسيق ورد
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                تنسيق ورد راقٍ يعكس روح المناسبة بذوق فخم.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 5: هوديز وتيشرتات -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/tp3.jpg" alt="هوديز وتيشرتات" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=clothes" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                هوديز وتيشرتات
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                كل ما يخص الهوديز والتيشرتات بجودة عالية .
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 6: كفرات الجوال -->
        <div class="swiper-slide p-4">
          <div class="bg-grayCustom-100 group flex flex-col h-full shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 rounded-lg overflow-hidden">
            <div class="w-full aspect-[3/4] overflow-hidden mb-4">
              <img src="/image/tp2.jpg" alt="كفرات الجوال" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
            </div>
            <div class="p-4 mb-2">
              <a href="{{ route('gallery') }}?cat=Phone_covers" class="text-xl font-bold text-primary-600 mb-2 text-right cursor-pointer hover:underline">
                كفرات الجوال
              </a>
              <p class="text-grayCustom-600 text-sm leading-relaxed">
                كفرات جوال بتصاميم عصرية وطباعة عالية الجودة.
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="swiper-pagination mt-10"></div>

      <!-- Navigation مخفية -->
      <div class="swiper-button-prev opacity-0 pointer-events-none"></div>
      <div class="swiper-button-next opacity-0 pointer-events-none"></div>
    </div>
  </div>
</section>

<section
  id="vision"
  class="relative min-h-screen flex items-center justify-center"
>
  <!-- Image -->
  <img
    src="/image/m7.png"
    alt="Vision"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- طبقة لون الأثل بشفافية -->
  <div class="absolute inset-0 bg-grayCustom-700/40 rounded-3xl"></div>

  <!-- Overlay -->
  <div class="absolute inset-0 text-white/90"></div>

  <!-- Content -->
  <div class="relative z-10 text-center px-6 max-w-4xl">
    <h3
      class="text-3xl md:text-6xl font-bold text-primary-600 mb-10
             transition-all duration-700 hover:tracking-wider"
    >
      رؤيتنا
    </h3>

<p class="text-xl md:text-2xl text-white leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.6)]">
       أن نكون الخيار الأول للعملاء من خلال حلول مبتكرة
      وتجربة عصرية تعكس احترافية خدماتنا.
    </p>
  </div>
</section>

<!-- Popup -->
<div id="popup" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-50">
  <div class="bg-white rounded-xl p-6 max-w-md w-full relative">
    
    <!-- زر الإغلاق -->
    <button
      onclick="closePopup()"
      class="absolute top-3 left-3 text-gray-500 hover:text-black text-xl"
    >
      ✕
    </button>

    <h3 class="text-xl font-bold text-center mb-4">
      بوكس الهدايا
    </h3>

    <!-- محتوى فارغ -->
    <div id="popupContent">
   <!-- المحتوى -->
    <h3 class="text-xl font-bold mb-4">أهلا وسهلاااا</h3>
      </div>

  </div>
</div>

  <!-- Footer -->
<footer class="bg-primary-900 text-white text-center py-8 mt-10">

  <div class="flex justify-center gap-6 mb-4">
    
    <!-- Facebook -->
    <a href="https://www.facebook.com/Hq_Gifts" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary-900 transition-all duration-300">
      <i class="fab fa-facebook-f text-lg"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/Hq_Gifts" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary-900 transition-all duration-300">
      <i class="fab fa-instagram text-lg"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/218920495399" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary-900 transition-all duration-300">
      <i class="fab fa-whatsapp text-lg"></i>
    </a>

  </div>

  <p class="text-sm text-white/80">
    © 2025 Hq_Gifts - جميع الحقوق محفوظة
  </p>

</footer>


<script src="/js/menu.js" defer></script>

<style>

/* STRONGER Morphing Blob */
.blob {
  animation: blobMorph 14s ease-in-out infinite;
  border-radius: 60% 40% 70% 30% / 30% 60% 40% 70%;
}

@keyframes blobMorph {
  0% {
    border-radius: 60% 40% 70% 30% / 30% 60% 40% 70%;
  }
  33% {
    border-radius: 35% 65% 25% 75% / 70% 30% 80% 20%;
  }
  66% {
    border-radius: 75% 25% 60% 40% / 35% 80% 25% 70%;
  }
  100% {
    border-radius: 60% 40% 70% 30% / 30% 60% 40% 70%;
  }
}

/* Image Fade Animation */
@keyframes fade {
  0%, 30% { opacity: 1; }
  33%, 100% { opacity: 0; }
}

.animate-fade {
  animation: fade 10s infinite;
}

.delay-0 { animation-delay: 0s; }
.delay-3000 { animation-delay: 3s; }
.delay-6000 { animation-delay: 6s; }

</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,

    preventClicks: false,
    preventClicksPropagation: false,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
</script>
<script>
function openPopup() {
  const popup = document.getElementById("popup");
  console.log("فتح البوب");
  popup.classList.remove("hidden"); // يظهر
}

function closePopup() {
  const popup = document.getElementById("popup");
  console.log("إغلاق البوب");
  popup.classList.add("hidden"); // يختفي
}

</script>


</body>
</html>
