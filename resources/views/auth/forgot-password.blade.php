<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>إعادة تعيين كلمة المرور</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">نسيت كلمة المرور؟</h2>

    <p class="text-sm text-gray-600 mb-4 text-center leading-relaxed">
      لا توجد مشكلة! فقط أدخل بريدك الإلكتروني وسنرسل لك رابطًا لإعادة تعيين كلمة المرور.
    </p>

    <!-- Session status -->
    @if (session('status'))
      <div class="mb-4 text-sm text-green-600 font-medium text-center">
        {{ session('status') }}
      </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
      <div class="mb-4 bg-red-100 text-red-700 px-4 py-2 rounded text-sm">
        <ul class="list-disc pr-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <!-- Email Field -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
        <input
          id="email"
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus
          autocomplete="username"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="example@email.com"
        />
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700 transition">
          إرسال رابط إعادة التعيين
        </button>
      </div>
    </form>
  </div>
</body>
</html>
