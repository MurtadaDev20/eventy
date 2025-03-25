<div>
  <!-- آخر الأحداث -->
  <section id="latest" class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <div class="flex items-center justify-between mb-8">
              <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 relative after:block after:w-24 after:h-0.5 after:bg-orange-500 after:mx-auto after:mt-3">آخر الأحداث</h2>
              <a href="{{ route('allevent') }}" wire:navigate class="text-orange-600 hover:underline">عرض الكل</a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
              @foreach ($latests as $latest)
                  <div class="bg-gray-50 my-4 shadow-md overflow-hidden transition hover:shadow-lg animate-fadeInUp">
                      <div class="relative group">
                          <img src="{{ Storage::url($latest->image) }}"
                               alt="{{ $latest->title }}"
                               class="w-full h-48 object-cover transition duration-300 group-hover:brightness-50">

                          <a href="{{ route('event', $latest->id) }}" wire:navigate
                             class="absolute bottom-2 left-2 transform -translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-out text-white font-semibold px-4 py-2 rounded-lg text-sm shadow-md">
                              → تفاصيل الحدث
                          </a>

                          <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                              {{ $latest->category->name ?? 'غير مصنف' }}
                          </span>
                      </div>

                      <div class="p-5">
                          <h3 class="text-lg font-semibold text-gray-900 mb-2">
                              {{ $latest->title }}
                          </h3>
                          <p class="text-gray-600 text-sm opacity-50 mb-2">
                              {{ \Carbon\Carbon::parse($latest->start_date)->locale('ar')->translatedFormat('Y-F-d') }}
                          </p>
                      </div>
                  </div>
              @endforeach

              @if ($latests->count() == 0)
                  <div> لا يوجد أحداث حالياً </div>
              @endif
          </div>
      </div>
  </section>

  <!-- ✅ سكشن التواصل لإضافة حدث -->
  <section class="bg-orange-50 py-12 mt-12">
      <div class="container mx-auto px-4 text-center">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">هل لديك حدث؟</h2>
          <p class="text-gray-600 text-lg mb-6">إذا كنت ترغب في نشر فعاليتك على منصتنا، تواصل معنا الآن وسنقوم بإضافتها بكل سرور.</p>
          <a href="{{ route('contactus') }}" wire:navigate
             class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition duration-300">
               تواصل معنا
          </a>
      </div>
  </section>
</div>
