<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إعادة تعيين كلمة المرور</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">إعادة تعيين كلمة المرور</h2>

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

    <form method="POST" action="{{ route('password.update') }}">
      @csrf

      <!-- hidden token -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email Field -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
        <input
          id="email"
          type="email"
          name="email"
          value="{{ old('email', $request->email) }}"
          required
          autofocus
          autocomplete="username"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="example@email.com"
        >
      </div>

      <!-- New Password -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 mb-2">كلمة المرور الجديدة</label>
        <input
          id="password"
          type="password"
          name="password"
          required
          autocomplete="new-password"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="********"
        >
      </div>

      <!-- Confirm Password -->
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 mb-2">تأكيد كلمة المرور</label>
        <input
          id="password_confirmation"
          type="password"
          name="password_confirmation"
          required
          autocomplete="new-password"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-orange-500"
          placeholder="********"
        >
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700 transition">
        إعادة تعيين كلمة المرور
      </button>
    </form>
  </div>
</body>
</html>
