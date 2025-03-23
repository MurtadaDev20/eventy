<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الرئيسية - فعاليات العراق</title>
  <!-- استدعاء Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- استدعاء animate.css وWOW.js للتأثيرات عند التمرير -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- استدعاء مكتبة Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <!-- تأثيرات الأنيميشن المخصصة -->
  <style>
    @keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-slideUp {
  animation: slideUp 2s ease-out forwards;
}

.delay-200 {
  animation-delay: 0.2s;
}

.delay-400 {
  animation-delay: 0.4s;
}

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out both;
    }

    @media (min-width: 1536px) {
    .container {
        max-width: 1280px !important ;
    }
    }

    @media (max-width: 640px) {
    .container {
        text-align: center !important;
      
    }
    .more-info {
        margin: auto !important;
      
    }
}

    .almarai-light {
  font-family: "Almarai", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.almarai-regular {
  font-family: "Almarai", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.almarai-bold {
  font-family: "Almarai", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.almarai-extrabold {
  font-family: "Almarai", sans-serif;
  font-weight: 800;
  font-style: normal;
}

  </style>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body class="antialiased text-gray-800">
  <!-- الهيدر: الشعار وقائمة التنقل -->
  @include('events.body.nav')

  <!-- قسم المقدمة (Hero Section) -->
  @include('events.body.intro')

  <!-- قسم الأحداث المميزة مع سلايدر للبطاقات الكاملة -->
      {{-- @livewire('featured') --}}
      <livewire:featured/>
      
      <!-- قسم آخر الأحداث -->
      @livewire('latest')

  <!-- قسم من نحن -->
  @include('events.body.aboutUs')

  <!-- الفوتر -->
  @include('events.body.footer')

  <!-- نقطة التوقف لقسم التواصل -->
  <section id="contact" class="hidden"></section>

  <!-- استدعاء مكتبة Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    // تهيئة سلايدر للأحداث المميزة بدون أسهم أو باجينيشن، مع عرض 4 بطاقات في الشاشات الكبيرة
    var swiperFeatured = new Swiper(".mySwiperFeatured", {
      loop: true,
      spaceBetween: 20,
      autoplay: { delay: 4000 },
      breakpoints: {
        640: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 4 },
      },
    });
    // تهيئة WOW.js بعد تحميل الصفحة
    new WOW().init();
  </script>

<script>
  var swiper = new Swiper(".mySwiperCategories", {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true, // تشغيل اللوب
      autoplay: {
          delay: 3000, // مدة الانتظار بين التمريرات (2.5 ثانية)
          disableOnInteraction: false, // يستمر التشغيل حتى بعد التفاعل
      },
      breakpoints: {
          640: { slidesPerView: 2 },
          768: { slidesPerView: 3 },
          1024: { slidesPerView: 4 }
      }
  });
</script>

  @stack('modals')

  @livewireScripts
</body>
</html>
