@extends('events.master')

@section('latest')
<section id="latest" class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold">آخر الأحداث</h2>
        <a href="#" class="text-indigo-600 hover:underline">عرض الكل</a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- بطاقة حدث 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest1/400/300" alt="مهرجان الموسيقى" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">مهرجان الموسيقى</h3>
            <p class="text-gray-600 text-sm">15 أغسطس 2025 - الموصل</p>
          </div>
        </div>
        <!-- بطاقة حدث 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest2/400/300" alt="فعالية خيرية" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">فعالية خيرية</h3>
            <p class="text-gray-600 text-sm">1 سبتمبر 2025 - كربلاء</p>
          </div>
        </div>
        <!-- بطاقة حدث 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest3/400/300" alt="حفل تخرج" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">حفل تخرج</h3>
            <p class="text-gray-600 text-sm">10 سبتمبر 2025 - بغداد</p>
          </div>
        </div>
        <!-- بطاقة حدث 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest4/400/300" alt="ورشة عمل فنية" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">ورشة عمل فنية</h3>
            <p class="text-gray-600 text-sm">22 أكتوبر 2025 - النجف</p>
          </div>
        </div>
        <!-- بطاقة حدث 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest5/400/300" alt="مؤتمر طبي" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">مؤتمر طبي</h3>
            <p class="text-gray-600 text-sm">5 نوفمبر 2025 - السليمانية</p>
          </div>
        </div>
        <!-- بطاقة حدث 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
          <img src="https://picsum.photos/seed/latest6/400/300" alt="مهرجان الطعام" class="w-full h-40 object-cover" />
          <div class="p-4">
            <h3 class="text-xl font-semibold mb-1">مهرجان الطعام</h3>
            <p class="text-gray-600 text-sm">18 ديسمبر 2025 - بغداد</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-8">
        <button class="bg-indigo-600 text-white font-semibold py-2 px-8 rounded-full hover:bg-indigo-700 transition-colors duration-300">
          المزيد
        </button>
      </div>
    </div>
  </section>
@endsection