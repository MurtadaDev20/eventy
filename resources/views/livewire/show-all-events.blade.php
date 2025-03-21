<div>
  <section class="py-12 bg-gray-100">
      <div class="container mx-auto px-6">
          <h2 class="text-4xl font-bold text-center mb-10 text-gray-800 relative inline-block 
                      after:block after:w-24 after:h-1 after:bg-orange-500 after:mx-auto after:mt-2">
              كل الأحداث
          </h2>
          
          <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
              
              <!-- العمود الجانبي (البحث والفلاتر) -->
              <aside class="md:col-span-1 bg-white p-6 rounded-lg shadow-md">
                  
                  <!-- صندوق البحث -->
                  <div class="mb-6">
                      <h3 class="text-xl font-bold mb-3 text-gray-800">بحث عن الحدث</h3>
                      <input type="text" wire:model.live.debounce.450ms="search" 
                             placeholder="ابحث عن فعالية..." 
                             class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                  </div>

                  <!-- فلتر التصنيفات -->
                  <div class="mb-6">
                      <h3 class="text-xl font-bold mb-3 text-gray-800">التصنيف</h3>
                      <select wire:model.live="category" 
                              class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3">
                          <option value="">جميع الفئات</option>
                          @foreach ($categories as $id => $name)
                              <option value="{{ $id }}">{{ $name }}</option>
                          @endforeach
                      </select>
                  </div>

                  <!-- فلتر حسب المدينة -->
                  <div class="mb-6">
                      <h3 class="text-xl font-bold mb-3 text-gray-800">المدينة</h3>
                      <select wire:model.live="governoratSelected" 
                              class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3">
                          <option value="">جميع المدن</option>
                          @foreach ($governorate as $gov)
                              <option value="{{ $gov }}">{{ $gov }}</option>
                          @endforeach
                      </select>
                  </div>

                  <!-- زر حذف البحث -->
                  <div class="text-center">
                      <button wire:click="resetSearch"
                          class="bg-red-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-700 transition duration-300 shadow-md">
                           حذف البحث
                      </button>
                  </div>

              </aside>
              
              <!-- عمود المحتوى الرئيسي للأحداث -->
              <div class="md:col-span-3 space-y-8">
                  @foreach ($events as $event)
                  <article class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg">
                      <a href="{{ route('event', $event->id) }}">
                          <img src="{{ Storage::url($event->image)}}" 
                               alt="{{ $event->title }}" 
                               class="w-full h-56 object-cover">
                      </a>
                      <div class="p-6">
                          <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $event->title }}</h3>
                          <p class="text-gray-600 text-sm mb-3">
                              📅 {{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}  
                              📍 {{ $event->governorate }}
                          </p>
                          <p class="text-gray-700 mb-4">
                              {{ Str::limit(strip_tags($event->description), 100) }}
                          </p>
                          <a href="{{ route('event', $event->id) }}" wire:navigate 
                             class="text-orange-600 hover:underline font-semibold inline-block">
                              قراءة المزيد →
                          </a>
                      </div>
                  </article>
                  @endforeach

                  <!-- زر تحميل المزيد -->
                  <div class="text-center mt-8">
                      {{ $events->links() }}
                  </div>
              </div>
              
          </div>
      </div>
  </section>
</div>
