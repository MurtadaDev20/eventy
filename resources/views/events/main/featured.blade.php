@extends('events.master')

@section('featured')
  <section id="featured" class="py-12 bg-gray-100">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">الأحداث المميزة</h2>
        <!-- حاوية Swiper -->
        <div class="swiper mySwiperFeatured">
          <div class="swiper-wrapper">
            <!-- بطاقة فعالية مميزة 1 -->
            <div class="swiper-slide">
              <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-2xl wow animate__fadeInUp" data-wow-delay="0.1s">
                <img src="https://picsum.photos/seed/featured1/600/400" alt="مهرجان السينما" class="w-full h-56 object-cover" />
                <div class="p-6 flex flex-col">
                  <h3 class="text-2xl font-semibold mb-2">مهرجان السينما</h3>
                  <p class="text-gray-600 mb-4">5 مارس 2025 - بغداد</p>
                  <a href="#" class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                    معرفة المزيد
                  </a>
                </div>
              </div>
            </div>
            <!-- بطاقة فعالية مميزة 2 -->
            <div class="swiper-slide">
              <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-2xl wow animate__fadeInUp" data-wow-delay="0.3s">
                <img src="https://picsum.photos/seed/featured2/600/400" alt="معرض الكتاب" class="w-full h-56 object-cover" />
                <div class="p-6 flex flex-col">
                  <h3 class="text-2xl font-semibold mb-2">معرض الكتاب</h3>
                  <p class="text-gray-600 mb-4">20 يونيو 2025 - أربيل</p>
                  <a href="#" class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                    معرفة المزيد
                  </a>
                </div>
              </div>
            </div>
            <!-- بطاقة فعالية مميزة 3 -->
            <div class="swiper-slide">
              <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-2xl wow animate__fadeInUp" data-wow-delay="0.5s">
                <img src="https://picsum.photos/seed/featured3/600/400" alt="مؤتمر التكنولوجيا" class="w-full h-56 object-cover" />
                <div class="p-6 flex flex-col">
                  <h3 class="text-2xl font-semibold mb-2">مؤتمر التكنولوجيا</h3>
                  <p class="text-gray-600 mb-4">10 يوليو 2025 - البصرة</p>
                  <a href="#" class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                    معرفة المزيد
                  </a>
                </div>
              </div>
            </div>
            <!-- بطاقة فعالية مميزة 4 -->
            <div class="swiper-slide">
              <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-2xl wow animate__fadeInUp" data-wow-delay="0.7s">
                <img src="https://picsum.photos/seed/featured4/600/400" alt="فعالية ثقافية" class="w-full h-56 object-cover" />
                <div class="p-6 flex flex-col">
                  <h3 class="text-2xl font-semibold mb-2">فعالية ثقافية</h3>
                  <p class="text-gray-600 mb-4">1 يوليو 2025 - النجف</p>
                  <a href="#" class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                    معرفة المزيد
                  </a>
                </div>
              </div>
            </div>
            <!-- يمكنك إضافة المزيد من البطاقات هنا إذا رغبت -->
          </div>
        </div>
      </div>
    </section>
@endsection