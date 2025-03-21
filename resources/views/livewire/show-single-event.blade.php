<div>
  <!-- صورة الغلاف (Hero Section) -->
  <section class="relative h-80">
    <img src="{{ Storage::url($event->image) }}" 
         alt="صورة الفعالية"
         class="w-full h-full object-cover brightness-75">
    
    <!-- محتوى فوق الصورة -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4">
      <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow mb-3">
        {{ $event->title }}
      </h1>
      <p class="text-lg font-medium">
        📍 {{ $event->address }} — {{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}
      </p>
    </div>
  </section>

  <!-- محتوى تفاصيل الفعالية -->
  <section class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      <!-- العمود الجانبي -->
      <aside class="space-y-6">

        <!-- تفاصيل الحدث -->
        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-orange-500">
          <h3 class="font-bold text-lg mb-3 text-gray-800">تفاصيل سريعة</h3>
          <ul class="text-sm text-gray-700 space-y-2">
            <li>🕒 <strong>يبدأ:</strong> {{ \Carbon\Carbon::parse($event->start_date)->translatedFormat('Y-m-d - h:i A') }}</li>
            <li>🕔 <strong>ينتهي:</strong> {{ \Carbon\Carbon::parse($event->end_date)->translatedFormat('Y-m-d - h:i A') }}</li>
            <li>📍 <strong>العنوان:</strong> {{ $event->address }}</li>
          </ul>
        </div>

        <!-- رابط التسجيل -->
        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-indigo-500">
          <h3 class="font-bold text-lg mb-3 text-gray-800">رابط التسجيل</h3>
          <a href="{{ $event->lognUrl }}" 
             target="_blank"
             class="text-indigo-600 hover:text-indigo-800 text-sm underline break-words">
            {{ $event->lognUrl }}
          </a>
        </div>

      </aside>
      <!-- العمود الرئيسي -->
      <div class="md:col-span-2 space-y-8">

        <!-- وصف الفعالية -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">نبذة عن الفعالية</h2>
          <div class="prose prose-gray max-w-none leading-loose">
            {!! $event->description !!}
          </div>
        </div>

        <!-- قسم التعليقات -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <livewire:event-comment :key="'comments' . $event->id" :$event />
        </div>

      </div>

      
    </div>
  </section>
</div>
