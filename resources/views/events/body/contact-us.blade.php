@extends('events.addintion')
@section('title', 'تواصل معنا')
@section('content')
<div class="min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white rounded-lg shadow-lg overflow-hidden max-w-6xl">
      <div class="grid grid-cols-1 md:grid-cols-2">
        
        <!-- ✅ الصورة -->
        <div class="h-64 md:h-auto">
          <img src="{{ url('storage/events/cover/contactUs.jpg') }}"
               alt="صورة تواصل"
               class="w-full h-full object-cover" />
        </div>

        <!-- ✅ محتوى التواصل -->
        <div class="p-8">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">تواصل معنا</h2>
          <p class="text-gray-600 mb-6">
            يسعدنا تواصلك معنا! إذا كان لديك أي استفسار أو اقتراح، لا تتردد في إرسال رسالة لنا.
            إذا كنت ترغب في نشر فعاليتك على منصتنا، تواصل معنا الآن وسنقوم بإضافتها بكل سرور
          </p>

          <!-- معلومات الاتصال -->
          <div class="mb-6">
            <p class="flex items-center text-gray-700 mb-2">
              <svg class="w-5 h-5 text-orange-500 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24">
                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              البريد الإلكتروني: <span class="ms-2">eventy@alphawave-tech.com</span>
            </p>
            <p class="flex items-center text-gray-700">
              <svg class="w-5 h-5 text-orange-500 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24">
                <path d="M3 5h2l3.6 7.59-1.35 2.45A1 1 0 008 17h10a1 1 0 001-1v-1H8.42a1 1 0 01-.9-.55L6 11h13a1 1 0 000-2H6.42l-.6-1H3V5z"/>
              </svg>
              الهاتف: <span class="ms-2">+9647725933735 </span>
            </p>
          </div>

          <!-- نموذج تواصل -->
        <!--  <form method="POST" action="#">
            <div class="grid grid-cols-1 gap-4 mb-4">
              <input type="text" name="name" placeholder="الاسم الكامل"
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required>

              <input type="email" name="email" placeholder="البريد الإلكتروني"
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required>

              <textarea name="message" rows="4" placeholder="اكتب رسالتك هنا..."
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required></textarea>
            </div>

            <button type="submit"
                    class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700 transition duration-300">
              إرسال الرسالة
            </button>
          </form>
		-->
        </div>
      </div>
    </div>
  </div>
@endsection