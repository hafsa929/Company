<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>نبذة تعريفية عن الشركة</title>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

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
    <h3 class="text-3xl font-bold text-primary-600 text-center mb-10">خدماتنا</h3>

    <!-- Swiper -->
    <div class="swiper mySwiper ">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide p-4">
          <div class="p-6 bg-grayCustom-100 shadow rounded-lg group relative overflow-hidden flex flex-col">
            <!-- الصورة -->
            <div class="w-full h-48 overflow-hidden rounded-lg mb-4">
              <img src="/image/m1.jpg" alt="طباعة مخصصة"
                   class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            </div>
            <!-- العنوان -->
            <h4 class="text-xl font-bold text-primary-600 mb-2">الطباعة المخصصة</h4>
            <!-- الوصف -->
            <p class="text-grayCustom-600 line-clamp-3 flex-grow">
              نطبع تصميمك الخاص على كل المنتجات بجودة عالية.
            </p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide p-4">
          <div class="p-6 bg-grayCustom-100 shadow rounded-lg group relative overflow-hidden flex flex-col">
            <div class="w-full h-48 overflow-hidden rounded-lg mb-4">
              <img src="/image/m6.png" alt="تغليف الهدايا"
                   class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            </div>
            <h4 class="text-xl font-bold text-primary-600 mb-2">تغليف الهدايا</h4>
            <p class="text-grayCustom-600 line-clamp-3 flex-grow">
              تغليف أنيق وفريد يبرز شخصية هديتك ويجعلها أكثر تميزًا.
            </p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide p-4">
          <div class="p-6 bg-grayCustom-100 shadow rounded-lg group relative overflow-hidden flex flex-col">
            <div class="w-full h-48 overflow-hidden rounded-lg mb-4">
              <img src="/image/m7.png" alt="تنسيق الورود"
                   class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            </div>
            <h4 class="text-xl font-bold text-primary-600 mb-2">تنسيق الورود</h4>
            <p class="text-grayCustom-600 line-clamp-3 flex-grow">
              تنسيق ورد جميل ومميز يعبّر عن روح المناسبة ويضيف لمسة راقية.
            </p>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide p-4">
          <div class="p-6 bg-grayCustom-100 shadow rounded-lg group relative overflow-hidden flex flex-col">
            <div class="w-full h-48 overflow-hidden rounded-lg mb-4">
              <img src="/image/m8.jpg" alt="بوكس الهدايا"
                   class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            </div>
            <h4 class="text-xl font-bold text-primary-600 mb-2">بوكس الهدايا المخصص</h4>
            <p class="text-grayCustom-600 line-clamp-3 flex-grow">
              إنشاء بوكسات حسب الطلب للهدايا والمناسبات الخاصة.
            </p>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="swiper-pagination mt-6 lg:mt-12"></div>

      <!-- Hidden Navigation (إن كنت لا تريد أزرار) -->
      <div class="swiper-button-prev opacity-0 pointer-events-none"></div>
      <div class="swiper-button-next opacity-0 pointer-events-none"></div>
    </div>
  </div>
</section>





  <section id="vision" class="max-w-6xl mx-auto p-10 grid md:grid-cols-2 gap-10 items-center">
    <div>
      <h3 class="text-3xl font-bold text-primary-600 mb-4">رؤيتنا</h3>
      <p class="text-grayCustom-700 leading-relaxed">أن نكون الخيار الأول للعملاء من خلال حلول مبتكرة ومهنية عالية.</p>
    </div>
    <div class="rounded-xl overflow-hidden shadow">
      <img src="https://via.placeholder.com/600x400" alt="Vision Image" />
    </div>
  </section>

  <section id="team" class="bg-grayCustom-100 py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-primary-600 text-center mb-10">فريق العمل</h3>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white shadow p-4 rounded-lg text-center">
          <img src="https://via.placeholder.com/150" class="rounded-full mx-auto mb-4" />
          <h4 class="font-bold text-grayCustom-900">اسم الموظف</h4>
          <p class="text-grayCustom-600 text-sm">الوظيفة</p>
        </div>
      </div>
    </div>
  </section> 

  <!-- Footer -->
  <footer class="bg-primary-900 text-white text-center py-6 mt-10">
    <p>© 2025 اسم الشركة - جميع الحقوق محفوظة</p>
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

</body>
</html>
