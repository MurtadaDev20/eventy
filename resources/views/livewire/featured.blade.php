<div>
    <section id="featured" class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8 text-center">الأحداث المميزة</h2>
          <!-- حاوية Swiper -->
          <div class="swiper mySwiperFeatured">
            <div class="swiper-wrapper">
              @foreach ($events_featured as $event) 
                  
              
              <div class="swiper-slide">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-2xl wow animate__fadeInUp" data-wow-delay="0.1s">
                  <img src="{{ Storage::url($event->image)}}" alt="مهرجان السينما" class="w-full h-56 object-cover" />
                  <div class="p-6 flex flex-col">
                    <h3 class="text-2xl font-semibold mb-2">{{$event->title}}</h3>
                    <p class="text-gray-600 mb-4">5 مارس 2025 - بغداد</p>
                    <a href="#" class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                      معرفة المزيد
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
</div>
