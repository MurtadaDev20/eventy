<div>
        <!-- قسم البطل (Hero) للفعالية -->
  <section class="relative bg-gray-200">
    <!-- صورة خلفية -->
    <img
      src="{{ Storage::url($event->image)}}"
      alt="صورة الفعالية"
      class="w-full h-72 object-cover object-center"
    />
    <!-- تظليل فوق الصورة -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <!-- محتوى البطل -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
      <h1 class="text-3xl md:text-4xl font-bold mb-2">{{$event->title}}</h1>
      <p class="text-lg md:text-xl mb-2">{{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d') }}- {{$event->address}}</p>
      <p class="text-sm md:text-base">{{$event->address}}</p>
    </div>
  </section>

  <!-- قسم تفاصيل الفعالية -->
  <section class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
      <!-- العمود الرئيسي -->
      <div class="w-full md:w-2/3 space-y-6">
        <!-- وصف الفعالية -->
        <div class="bg-white p-6 rounded shadow">
          <h2 class="text-2xl font-bold mb-4">نبذة عن الفعالية</h2>
          <p class="text-gray-700 leading-relaxed">
            {!! $event->description !!}

          </p>
        </div>
        <!-- معرض صور مصغر (Gallery) -->
        {{-- <div class="bg-white p-6 rounded shadow">
          <h3 class="text-xl font-semibold mb-4">معرض الصور</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <img src="https://via.placeholder.com/300x200" alt="صورة 1" class="rounded shadow" />
            <img src="https://via.placeholder.com/300x200" alt="صورة 2" class="rounded shadow" />
            <img src="https://via.placeholder.com/300x200" alt="صورة 3" class="rounded shadow" />
            <img src="https://via.placeholder.com/300x200" alt="صورة 4" class="rounded shadow" />
          </div>
        </div> --}}

        <!-- قسم التقييم والتعليقات -->
        <div class="bg-white p-6 rounded shadow space-y-6">
          <!-- التقييم (Ratings) -->
          {{-- <div>
            <h3 class="text-xl font-semibold mb-2">تقييم الفعالية</h3>
            <p class="text-gray-600 text-sm mb-4">اختر عدد النجوم للتعبير عن مدى إعجابك بالفعالية.</p>
            <!-- أيقونات النجوم (مثال واجهة فقط) -->
            <div class="flex items-center space-x-1 text-yellow-400">
              <button class="focus:outline-none">
                <svg class="w-8 h-8 fill-current hover:text-yellow-500" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.122-6.545L.367 6.91l6.564-.954L10 .5l3.07 5.455 6.564.954-4.877 4.635 1.122 6.545z"/>
                </svg>
              </button>
              <button class="focus:outline-none">
                <svg class="w-8 h-8 fill-current hover:text-yellow-500" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.122-6.545L.367 6.91l6.564-.954L10 .5l3.07 5.455 6.564.954-4.877 4.635 1.122 6.545z"/>
                </svg>
              </button>
              <button class="focus:outline-none">
                <svg class="w-8 h-8 fill-current hover:text-yellow-500" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.122-6.545L.367 6.91l6.564-.954L10 .5l3.07 5.455 6.564.954-4.877 4.635 1.122 6.545z"/>
                </svg>
              </button>
              <button class="focus:outline-none">
                <svg class="w-8 h-8 fill-current hover:text-yellow-500" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.122-6.545L.367 6.91l6.564-.954L10 .5l3.07 5.455 6.564.954-4.877 4.635 1.122 6.545z"/>
                </svg>
              </button>
              <button class="focus:outline-none">
                <svg class="w-8 h-8 fill-current hover:text-yellow-500" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.122-6.545L.367 6.91l6.564-.954L10 .5l3.07 5.455 6.564.954-4.877 4.635 1.122 6.545z"/>
                </svg>
              </button>
            </div>
          </div> --}}

          <!-- التعليقات (Comments) -->
          <div>
            <h3 class="text-xl font-semibold mb-4">التعليقات</h3>
            <!-- قائمة التعليقات -->
            <div class="space-y-4 mb-6">
              <!-- تعليق 1 -->
              <div class="bg-gray-100 p-3 rounded">
                <div class="flex items-center justify-between mb-2">
                  <span class="font-bold text-sm">أحمد</span>
                  <span class="text-xs text-gray-500">منذ ساعة</span>
                </div>
                <p class="text-gray-700 text-sm">فعالية جميلة ومميزة، أتمنى تكرارها في محافظات أخرى.</p>
              </div>
              
            </div>
            <!-- نموذج إضافة تعليق جديد -->
            @auth
                
            <form class="space-y-3">
              
              <div>
                <label class="block text-sm font-medium mb-1" for="commentContent">التعليق</label>
                <textarea
                  id="commentContent"
                  class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                  rows="4"
                  placeholder="اكتب تعليقك هنا..."
                  required
                ></textarea>
              </div>
              <button
                type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300"
              >
                إضافة تعليق
              </button>
            </form>
            @else
            <p class="text-gray-600 text-sm">يجب عليك تسجيل الدخول لتتمكن من إضافة تعليق.</p>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">تسجيل الدخول</a>
            @endauth
          </div>
        </div>
      </div>

      <!-- العمود الجانبي (معلومات إضافية) -->
      <aside class="w-full md:w-1/3 space-y-6">
        <!-- صندوق معلومات الوقت والمكان -->
        <div class="bg-white p-6 rounded shadow">
          <h3 class="text-xl font-semibold mb-4">تفاصيل سريعة</h3>
          <ul class="space-y-2 text-sm text-gray-700">
            <li><strong>يبدأ في :</strong> {{ \Carbon\Carbon::parse($event->start_date)->locale('ar')->translatedFormat('Y-F-d - h:m') }}</li>
            <li><strong>ينتهي في :</strong> {{ \Carbon\Carbon::parse($event->end_date)->locale('ar')->translatedFormat('Y-F-d - h:m') }}</li>
            <li><strong>العنوان : </strong> {{$event->address}}</li>
            {{-- <li><strong>رسوم الدخول:</strong> مجانية</li> --}}
          </ul>
        </div>
        <!-- صندوق معلومات الاتصال -->
        <div class="bg-white p-6 rounded shadow">
          <h3 class="text-xl font-semibold mb-4">للتسجيل</h3>
          {{-- <p class="text-sm text-gray-700 mb-2">للاستفسارات والحجوزات:</p> --}}
          <p class="text-sm text-gray-700">الرابط : <a class="text-blue-500" href="{{$event->lognUrl}}">{{$event->lognUrl}}</a></p>
          {{-- <p class="text-sm text-gray-700">البريد: info@events.com</p> --}}
        </div>
      </aside>
    </div>
  </section>
</div>
