<div>
    <section class="py-12">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8 text-center">كل الأحداث</h2>
          <div class="flex flex-col md:flex-row gap-8">
            <!-- العمود الجانبي (البحث والفلتر) -->
            <aside class="w-full md:w-1/3 space-y-8">
              
              
              <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center border-b pb-3 mb-4">
                    <h3 class="text-2xl font-bold text-gray-800">نتائج البحث</h3>
                    <span class="text-sm text-gray-500">{{ $events->total() }} نتيجة</span>
                </div>
            
                <!-- Search Query Display -->
                @if ($search)
                    <div class="bg-gray-100 p-3 rounded-lg text-gray-800 mb-4">
                        <strong>كلمة البحث:</strong> {{ $search }}
                    </div>
                @endif
                @if ($governoratSelected)
                    <div class="bg-gray-100 p-3 rounded-lg text-gray-800 mb-4">
                        <strong> المدينة:</strong> {{ $governoratSelected }}
                    </div>
                @endif
                @if ($category)
                    <div class="bg-gray-100 p-3 rounded-lg text-gray-800 mb-4">
                      @php 
                        $category = App\Models\Category::find($category);
                      @endphp
                        <strong> التصنيف:</strong> {{ $category->name }}
                    </div>
                @endif
            
                <!-- Reset Search Button -->
                <div class="flex justify-center">
                    <button wire:click="resetSearch"
                        class="bg-red-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-700 transition duration-300 shadow-md">
                         حذف البحث
                    </button>
                </div>

            </div>
            

                <!-- صندوق البحث -->
                <div class="bg-white p-6 rounded-lg shadow">
                  <h3 class="text-xl font-bold mb-4">بحث عن الحدث</h3>
                  <input type="text" wire:model.live.debounce.450ms="search" placeholder="ابحث عن فعالية..." class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <!-- فلتر حسب الفئة -->
<div class="bg-white p-6 rounded-lg shadow-md">
  <h3 class="text-xl font-bold mb-4 text-gray-800">تصفية حسب الفئة</h3>
  <div class="relative">
      <select wire:model.live="category" 
          class="appearance-none w-full bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300">
          <option value="" class="text-gray-500 font-semibold">جميع الفئات</option>
          @foreach ($categories as $id => $name)
              <option value="{{ $id }}" class="text-gray-800 font-medium">
                  {{ $name }}
              </option>
          @endforeach
      </select>
      <!-- Custom Arrow Icon -->
      <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
          <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
      </div>
  </div>
</div>

<!-- فلتر حسب المدينة -->
<div class="bg-white p-6 rounded-lg shadow-md">
  <h3 class="text-xl font-bold mb-4 text-gray-800">تصفية حسب المدينة</h3>
  <div class="relative">
      <select wire:model.live="governoratSelected" 
          class="appearance-none w-full bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300">
          <option value="" class="text-gray-500 font-semibold">جميع المدن</option>
          @foreach ($governorate as $gov)
              <option value="{{ $gov }}" class="text-gray-800 font-medium">
                  {{ $gov }}
              </option>
          @endforeach
      </select>
      <!-- Custom Arrow Icon -->
      <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
          <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
      </div>
  </div>
</div>

              </aside>
            <!-- عمود المحتوى الرئيسي (مدونة الأحداث) -->
            {{-- <div class="md:w-3/5"></div> --}}
            <div class="w-full md:w-2/3 space-y-8">
              @foreach ($events as $event)
                  
              
              <article class="bg-white rounded-lg shadow overflow-hidden transition transform hover:scale-105 hover:shadow-lg">
                <a href="{{ route('event', $event->id) }}"><img src="{{ Storage::url($event->image)}}" alt="مهرجان الموسيقى" class="w-full h-40 object-cover" /></a>
                <div class="p-6">
                  <h3 class="text-2xl font-bold mb-2">{{$event->title}}</h3>
                  <p class="text-gray-600 text-sm mb-4">{{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}- {{$event->governorate}}</p>
                  <p class="text-gray-700">
                    {{ Str::limit(strip_tags($event->description), 100) }}
                  </p>
                  <a href="{{ route('event', $event->id) }}" wire:navigate class="text-indigo-600 hover:underline mt-4 inline-block">قراءة المزيد</a>
                </div>
              </article>
              @endforeach
              <!-- يمكن إضافة المزيد من المقالات هنا -->
            </div>
            
          </div>
          <!-- زر تحميل المزيد -->
          <div class="text-center mt-8">
            {{ $events->links() }}

            {{-- <button class="bg-indigo-600 text-white font-semibold py-2 px-8 rounded-full hover:bg-indigo-700 transition-colors duration-300">
              المزيد
            </button> --}}
          </div>
        </div>
      </section>
</div>
