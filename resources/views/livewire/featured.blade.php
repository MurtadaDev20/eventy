<div>
  {{-- @livewire('statistics') --}}
{{-- </livewirw:statistics> --}}
    <section id="featured" class="py-12 bg-white-800">
        <div class="container mx-auto px-4">
          <h1 class="text-3xl font-bold text-center mb-8 text-gray-800 relative  after:block after:w-24 after:h-0.5 after:bg-orange-500 after:mx-auto after:mt-3">الأحداث المميزة</h1>
          <!-- حاوية Swiper -->
          <div class="swiper mySwiperFeatured">
            <div class="swiper-wrapper">
              @foreach ($events_featured as $event) 
                  
              
              <div class="swiper-slide">
                <div class="bg-gray-50 my-4 shadow-md overflow-hidden transition hover:shadow-lg animate-fadeInUp">
                    
                    <!-- Image Wrapper with Hover Effect -->
                    <div class="relative group">
                            <img src="{{ Storage::url($event->image) }}" 
                                alt="{{ $event->title }}" 
                                class="w-full h-48 object-cover transition duration-300 group-hover:brightness-50">
            
                        <!-- Hover Button (Slides in from the left) -->
                        <a href="{{ route('event', $event->id) }}" 
                           class="absolute bottom-2 left-2 transform -translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-out  text-white font-semibold px-4 py-2 rounded-lg text-sm shadow-md">
                            → تفاصيل الحدث
                        </a>
            
                        <!-- Category Badge -->
                        <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                            {{ $event->category->name ?? 'غير مصنف' }}
                        </span>
                    </div>
            
                    <!-- Content -->
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">
                            {{ $event->title }}
                        </h3>
                        <p class="text-gray-600 text-sm opacity-50 mb-2">
                            {{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}
                        </p>
                    </div>
                </div>
            </div>
            
            
            
            
              @endforeach
              @if ($events_featured->count() == 0)
                <div> لا يوجد احداث مميزة حاليا</div>
              @endif
            </div>
          </div>
        </div>
      </section>


      <!-- قسم التصنيفات مع Swiper -->
<section class="bg-gray-100 py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 relative  after:block after:w-24 after:h-0.5 after:bg-orange-500 after:mx-auto after:mt-3">
      التصنيفات
  </h2>

      <!-- Swiper Container -->
      <div class="swiper mySwiperCategories">
          <div class="swiper-wrapper">

              <!-- صنف: الفعاليات الثقافية -->
              <div class="swiper-slide">
                  <a href="#" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition p-6 text-center">
                      {{-- <div class="flex justify-center mb-3">
                          <img src="https://cdn-icons-png.flaticon.com/128/2921/2921822.png" 
                               alt="الفعاليات الثقافية" 
                               class="w-16 h-16 object-cover rounded-full">
                      </div> --}}
                      <h3 class="text-lg font-semibold text-gray-900">الفعاليات الثقافية</h3>
                      <p class="text-orange-500 text-sm mt-1">120 فعاليات</p>
                  </a>
              </div>

              <!-- صنف: الفعاليات الرياضية -->
              <div class="swiper-slide">
                  <a href="#" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition p-6 text-center">
                      {{-- <div class="flex justify-center mb-3">
                          <img src="https://cdn-icons-png.flaticon.com/128/9271/9271020.png" 
                               alt="الفعاليات الرياضية" 
                               class="w-16 h-16 object-cover rounded-full">
                      </div> --}}
                      <h3 class="text-lg font-semibold text-gray-900">الفعاليات الرياضية</h3>
                      <p class="text-orange-500 text-sm mt-1">85 فعاليات</p>
                  </a>
              </div>

              <!-- صنف: الفعاليات التقنية -->
              <div class="swiper-slide">
                  <a href="#" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition p-6 text-center">
                      {{-- <div class="flex justify-center mb-3">
                          <img src="https://cdn-icons-png.flaticon.com/128/2965/2965545.png" 
                               alt="الفعاليات التقنية" 
                               class="w-16 h-16 object-cover rounded-full">
                      </div> --}}
                      <h3 class="text-lg font-semibold text-gray-900">الفعاليات التقنية</h3>
                      <p class="text-orange-500 text-sm mt-1">60 فعاليات</p>
                  </a>
              </div>

              <!-- صنف: الفعاليات الترفيهية -->
              <div class="swiper-slide">
                  <a href="#" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition p-6 text-center">
                      {{-- <div class="flex justify-center mb-3">
                          <img src="https://cdn-icons-png.flaticon.com/128/1046/1046874.png" 
                               alt="الفعاليات الترفيهية" 
                               class="w-16 h-16 object-cover rounded-full">
                      </div> --}}
                      <h3 class="text-lg font-semibold text-gray-900">الفعاليات الترفيهية</h3>
                      <p class="text-orange-500 text-sm mt-1">95 فعاليات</p>
                  </a>
              </div>

          </div>
      </div>
  </div>
</section>


      
</div>


