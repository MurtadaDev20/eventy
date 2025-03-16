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
  <!-- تأثيرات الأنيميشن المخصصة -->
  <style>
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
      @livewire('featured')
      
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
      autoplay: { delay: 3000 },
      breakpoints: {
        640: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
    // تهيئة WOW.js بعد تحميل الصفحة
    new WOW().init();
  </script>
  @stack('modals')

  @livewireScripts
</body>
</html>
