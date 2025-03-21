<div>
    <section id="latest" class="py-12 bg-white">
        <div class="container mx-auto px-4">
          <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 relative  after:block after:w-24 after:h-0.5 after:bg-orange-500 after:mx-auto after:mt-3">آخر الأحداث</h2>
            <a href="{{ route('allevent') }}" wire:navigate class="text-orange-600 hover:underline">عرض الكل</a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- بطاقة حدث 1 -->
            @foreach ($latests as $latest)
            <div class="bg-gray-50 my-4 shadow-md overflow-hidden transition hover:shadow-lg animate-fadeInUp">
    
              <!-- Image Wrapper with Hover Effect -->
              <div class="relative group">
                  <img src="{{ Storage::url($latest->image) }}" 
                      alt="{{ $latest->title }}" 
                      class="w-full h-48 object-cover transition duration-300 group-hover:brightness-50">
          
                  <!-- Hover Button (Slides in from the left) -->
                  <a href="{{ route('event', $latest->id) }}" wire:navigate
                     class="absolute bottom-2 left-2 transform -translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-out text-white font-semibold px-4 py-2 rounded-lg text-sm shadow-md">
                      → تفاصيل الحدث
                  </a>
          
                  <!-- Category Badge -->
                  <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                      {{ $latest->category->name ?? 'غير مصنف' }}
                  </span>
              </div>
          
              <!-- Content -->
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
              <div> لا يوجد احداث حاليا</div>
            @endif
          <div class="text-center mt-8">
            {{-- <button class="bg-indigo-600 text-white font-semibold py-2 px-8 rounded-full hover:bg-indigo-700 transition-colors duration-300">
              المزيد
            </button> --}}
            
          </div>
        </div>
      </section>
</div>
