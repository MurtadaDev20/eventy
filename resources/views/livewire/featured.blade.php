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
                  <a href="{{ route('event', $event->id) }}" ><img src="{{ Storage::url($event->image)}}" alt="مهرجان السينما" class="w-full h-56 object-cover" /></a>
                  <div class="p-6 flex flex-col">
                    <h3 class="text-2xl font-semibold mb-2">{{$event->title}}</h3>
                    <p class="text-gray-600 mb-4">{{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}- {{$event->address}}</p>
                    <a href="{{ route('event', $event->id) }}"    class="mt-auto self-start bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300">
                      معرفة المزيد
                    </a>
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
</div>
