<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تسجيل الدخول</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">تسجيل الدخول</h2>

    <!-- عرض الرسائل في حال وجودها -->
    @if (session('status'))
      <div class="mb-4 text-sm text-green-600 font-medium">
        {{ session('status') }}
      </div>
    @endif

    <!-- عرض الأخطاء -->
    @if ($errors->any())
      <div class="mb-4 bg-red-100 text-red-700 px-4 py-2 rounded text-sm">
        <ul class="list-disc pr-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- فورم تسجيل الدخول -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- البريد الإلكتروني -->
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="email">البريد الإلكتروني</label>
        <input
          type="email"
          name="email"
          id="email"
          value="{{ old('email') }}"
          required
          autofocus
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="example@email.com"
        >
      </div>

      <!-- كلمة المرور -->
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="password">كلمة المرور</label>
        <input
          type="password"
          name="password"
          id="password"
          required
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="********"
        >
      </div>

      <!-- تذكرني + نسيت كلمة المرور -->
      <div class="flex items-center justify-between mb-4">
        <label class="flex items-center text-sm">
          <input type="checkbox" name="remember" class="form-checkbox ml-2">
          تذكرني
        </label>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-orange-600 hover:underline">
            نسيت كلمة المرور؟
          </a>
        @endif
      </div>

      <!-- زر تسجيل الدخول -->
      <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">
        تسجيل الدخول
      </button>
    </form>

    <!-- رابط لإنشاء حساب -->
    <p class="mt-6 text-center text-sm text-gray-600">
      ليس لديك حساب؟ 
      <a href="{{ route('register') }}" class="text-orange-600 hover:underline">أنشئ حساباً الآن</a>
    </p>
  </div>
</body>
</html>
