<div>
    <section id="latest" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
          <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold">آخر الأحداث</h2>
            <a href="{{ route('allevent') }}" wire:navigate class="text-indigo-600 hover:underline">عرض الكل</a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- بطاقة حدث 1 -->
            @foreach ($latests as $latest)
              
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hover:shadow-lg animate-fadeInUp">
              <a href="{{ route('event', $latest->id) }}" wire:navigate ><img src="{{ Storage::url($latest->image)}}" alt="مهرجان الموسيقى" class="w-full h-40 object-cover" /></a>
              <div class="p-4">
                <h3 class="text-xl font-semibold mb-1">{{$latest->title}}</h3>
                <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($latest->start_date)->locale('ar')->translatedFormat('Y-F-d') }}- {{$latest->address}}</p>
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
