<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>نبذة تعريفية عن الشركة</title>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
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
  
<div class="relative bg-white rounded-3xl m-2  ">
  <section id="about" class="max-w-6xl mx-auto p-10 grid md:grid-cols-2 gap-10 items-center">
  <div>
    <h3 class="text-3xl font-bold text-primary-600 mb-4">لمحة عن متجرنا</h3>
    <p class="text-gray-700 leading-relaxed">
      متجرنا متخصص في تقديم حلول التغليف والطباعة بجودة عالية، مع تصميمات مبتكرة تناسب احتياجاتك التجارية والشخصية.
    </p>
  </div>

  <!-- Blob Container -->
    <div class="blob w-80 h-80 md:w-[450px] md:h-[450px] overflow-hidden relative">
      
      <!-- Images -->
      <img src="/image/hq.jpg"
        class="absolute inset-0 w-full h-full object-cover animate-fade delay-0 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
      
      <img src="/image/hq_1.jpg"
        class="absolute inset-0 w-full h-full object-cover animate-fade delay-3000 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
      
      <img src="/image/hq.jpg"
        class="absolute inset-0 w-full h-full object-cover animate-fade delay-6000 rounded-[60%_40%_70%_30%/30%_60%_40%_70%]">
    </div>
  </div>
</section>
  </div>

  <section id="services" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-primary-600 text-center mb-10">خدماتنا</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 bg-grayCustom-100 shadow rounded-lg">
          <h4 class="text-xl font-bold text-primary-600 mb-2">الخدمة الأولى</h4>
          <p class="text-grayCustom-600">شرح مختصر عن الخدمة الأولى.</p>
        </div>
        <div class="p-6 bg-grayCustom-100 shadow rounded-lg">
          <h4 class="text-xl font-bold text-primary-600 mb-2">الخدمة الثانية</h4>
          <p class="text-grayCustom-600">شرح مختصر عن الخدمة الثانية.</p>
        </div>
        <div class="p-6 bg-grayCustom-100 shadow rounded-lg">
          <h4 class="text-xl font-bold text-primary-600 mb-2">الخدمة الثالثة</h4>
          <p class="text-grayCustom-600">شرح مختصر عن الخدمة الثالثة.</p>
        </div>
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
</body>
</html>
