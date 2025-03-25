<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>إنشاء حساب</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">إنشاء حساب</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
      <div class="mb-4 text-red-600 text-sm">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 mb-2">الاسم الكامل</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}"
               placeholder="اسمك الكامل"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required autofocus autocomplete="name">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               placeholder="example@email.com"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required autocomplete="username">
      </div>

      <div class="mb-4">
        <label for="password" class="block text-gray-700 mb-2">كلمة المرور</label>
        <input id="password" type="password" name="password"
               placeholder="********"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required autocomplete="new-password">
      </div>

      <div class="mb-4">
        <label for="password_confirmation" class="block text-gray-700 mb-2">تأكيد كلمة المرور</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               placeholder="********"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500" required autocomplete="new-password">
      </div>

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mb-4 flex items-start gap-2">
          <input type="checkbox" name="terms" id="terms" required class="mt-1">
          <label for="terms" class="text-sm text-gray-600">
            {!! __('أوافق على :terms_of_service و :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-orange-600 hover:text-orange-800">شروط الخدمة</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-orange-600 hover:text-orange-800">سياسة الخصوصية</a>',
            ]) !!}
          </label>
        </div>
      @endif

      <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">تسجيل</button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
      لديك حساب بالفعل؟ <a href="{{ route('login') }}" class="text-orange-600 hover:underline">تسجيل الدخول</a>
    </p>
  </div>
</body>
</html>
